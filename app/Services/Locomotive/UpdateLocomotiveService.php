<?php

namespace App\Services\Locomotive;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\RollingStock;
use App\Models\Passenger;
use App\Services\RollingStock\UpdateModelAbstractService;

class UpdateLocomotiveService extends UpdateModelAbstractService
{
    protected function getModel(RollingStock $rollingStock): Locomotive|Passenger|Freight
    {
        return Locomotive::where('rolling_stock_id', $rollingStock->id)->first();
    }

    protected function getRedirectPath(): string
    {
        return route('locomotive.index');
    }
}
