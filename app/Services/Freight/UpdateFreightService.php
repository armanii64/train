<?php

namespace App\Services\Freight;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\RollingStock;
use App\Models\Passenger;
use App\Services\RollingStock\UpdateModelAbstractService;

class UpdateFreightService extends UpdateModelAbstractService
{
    protected function getModel(RollingStock $rollingStock): Locomotive|Passenger|Freight
    {
        return Freight::where('rolling_stock_id', $rollingStock->id)->first();
    }

    protected function getRedirectPath(): string
    {
        return route('freight.index');
    }
}
