<?php

namespace App\Services\RollingStock;

use App\Events\RollingStock\Delete\RollingStockHasBeenDeletedCorrectly;
use App\Models\Response;
use App\Models\ResponseType;
use App\Models\RollingStock;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\JsonResponse;

abstract class DeleteModelAbstractService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    protected abstract function extraAction(RollingStock $rollingStock): void;

    public function execute(int $id): JsonResponse
    {
        $rollingStock = RollingStock::find($id);
        $rollingStock->events()->detach();
        $this->extraAction($rollingStock);
        $rollingStock->delete();

        $this->dispatcher->dispatch(new RollingStockHasBeenDeletedCorrectly($rollingStock));
        return Response::build(ResponseType::SUCCESS, [], 200);
    }
}
