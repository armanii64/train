<?php

namespace App\Services\Passenger;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\RollingStock;
use App\Models\Passenger;
use App\Services\RollingStock\UpdateModelAbstractService;

class UpdatePassengerService extends UpdateModelAbstractService
{
    protected function getModel(RollingStock $rollingStock): Locomotive|Passenger|Freight
    {
        return Passenger::where('rolling_stock_id', $rollingStock->id)->first();
    }

    protected function getRedirectPath(): string
    {
        return route('passenger.index');
    }
}
