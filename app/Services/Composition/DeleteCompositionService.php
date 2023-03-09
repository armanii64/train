<?php

namespace App\Services\Composition;

use App\Events\Composition\Delete\CompositionHasBeenDeletedCorrectly;
use App\Models\Composition;
use App\Models\Response;
use App\Models\ResponseType;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\JsonResponse;

class DeleteCompositionService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(int $id): JsonResponse
    {
        $composition = Composition::find($id);
        $composition->rollingStocks()->detach();
        $composition->delete();

        $this->dispatcher->dispatch(new CompositionHasBeenDeletedCorrectly($composition));
        return Response::build(ResponseType::SUCCESS, [], 200);
    }
}
