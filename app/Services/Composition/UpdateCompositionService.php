<?php

namespace App\Services\Composition;

use App\Events\Composition\Edit\CompositionHasBeenUpdatedCorrectly;
use App\Models\Composition;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateCompositionService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(Request $request, int $id): RedirectResponse
    {
        $composition = $this->saveAndGetComposition($id, $request);
        if ($composition->status != 'accepted') {
            $this->attachRollingStocks($request, $composition);
        }

        $this->dispatcher->dispatch(new CompositionHasBeenUpdatedCorrectly($composition));
        if ($composition->status == 'in_progress') {
            return redirect(route('composition.index'));
        }
        return redirect(route('composition.index-for-events'));
    }

    private function saveAndGetComposition(int $id, Request $request)
    {
        $composition = Composition::find($id);
        $composition->fill($request->get('composition'));
        $composition->save();
        return $composition;
    }

    private function attachRollingStocks(Request $request, Composition $composition): void
    {
        $composition->rollingStocks()->detach();
        $rollingStockIds = $request->get('rollingStocks');
        if (is_array($rollingStockIds)) {
            $composition->rollingStocks()->attach($rollingStockIds);
        }
    }
}
