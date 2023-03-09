<?php

namespace App\Services\RollingStock;

use App\Events\RollingStock\Create\RollingStockHasBeenCreatedCorrectly;
use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\RollingStock;
use App\Models\Passenger;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\RedirectResponse;

abstract class StoreModelAbstractService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    protected abstract function getModel(array $arrayModel): Locomotive|Passenger|Freight;

    protected abstract function getRedirectPath(): string;

    public function execute(?array $arrayModel, RollingStock $rollingStock): RedirectResponse
    {
        if (!is_null($arrayModel)) {
            $model = $this->getModel($arrayModel);
            $model->rollingStock()->associate($rollingStock);
            $model->save();
        }
        $this->dispatcher->dispatch(new RollingStockHasBeenCreatedCorrectly($rollingStock));
        return redirect($this->getRedirectPath());
    }
}
