<?php

namespace App\Services\Composition;

use App\Events\Composition\ChangeStatus\CompositionHasWrongRollingStocksError;
use App\Events\Composition\ChangeStatus\CompositionStatusHasBeenChangedCorrectly;
use App\Events\Composition\ChangeStatus\CompositionStatusHasNotBeenChangedCorrectly;
use App\Models\Composition;
use App\Models\Response;
use App\Models\ResponseType;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChangeStatusCompositionService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(Request $request, int $id): JsonResponse
    {
        $composition = Composition::find($id);
        $status = $request->get('status');
        if ($this->hasNotAllDataForEvent($composition)) {
            $this->dispatcher->dispatch(new CompositionStatusHasNotBeenChangedCorrectly($composition));
            return Response::build(ResponseType::ERROR, [], 422);
        } else if ($this->checkStatusAndCheckIsAnyPartAccepted($status, $composition)) {
            $this->dispatcher->dispatch(new CompositionHasWrongRollingStocksError($composition));
            return Response::build(ResponseType::ERROR, [], 422);
        }
        $this->saveData($status, $composition);
        return Response::build(ResponseType::SUCCESS, [], 200);
    }

    private function hasNotAllDataForEvent(Composition $composition): bool
    {
        return is_null($composition->event_id) || count($composition->rollingStocks) == 0;
    }

    private function checkStatusAndCheckIsAnyPartAccepted(string $status, Composition $composition): bool
    {
        $isProperStatus = $status == 'in_progress' || $status == 'to_accept';
        return $isProperStatus && $this->anyPartOfCompositionIsAlreadyAccepted($composition->rollingStocks);
    }

    private function anyPartOfCompositionIsAlreadyAccepted(Collection $rollingStocks): bool
    {
        $result = false;
        foreach ($rollingStocks as $rollingStock) {
            if (!$result) {
                if (!is_null($rollingStock->compositions)) {
                    foreach ($rollingStock->compositions as $composition) {
                        if ($composition->status == 'accepted') {
                            $result = true;
                            break;
                        }
                    }
                }
            } else {
                break;
            }
        }
        return $result;
    }

    private function saveData(mixed $status, Composition $composition): void
    {
        $composition->status = match ($status) {
            'in_progress' => 'sent',
            'to_accept' => 'accepted',
        };
        $composition->save();
        $this->createCopyComposition($composition);
        $this->dispatcher->dispatch(new CompositionStatusHasBeenChangedCorrectly($composition));
    }

    private function createCopyComposition(Composition $composition): void
    {
        if ($composition->status == 'sent') {
            $newComposition = new Composition($composition->toArray());
            $newComposition->status = 'to_accept';
            $newComposition->type = 'copy';
            $newComposition->original_id = $composition->id;
            $newComposition->save();
            $newComposition->rollingStocks()->attach($composition->rollingStocks);
        }
    }
}
