<?php

namespace App\Services\Passenger;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\Passenger;
use App\Services\RollingStock\StoreModelAbstractService;

class StorePassengerService extends StoreModelAbstractService
{
    protected function getModel(array $arrayModel): Locomotive|Passenger|Freight
    {
        return new Passenger($arrayModel);
    }

    protected function getRedirectPath(): string
    {
        return route('passenger.index');
    }
}
