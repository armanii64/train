<?php

namespace App\Services\Freight;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\Passenger;
use App\Services\RollingStock\StoreModelAbstractService;

class StoreFreightService extends StoreModelAbstractService
{
    protected function getModel(array $arrayModel): Locomotive|Passenger|Freight
    {
        return new Freight($arrayModel);
    }

    protected function getRedirectPath(): string
    {
        return route('freight.index');
    }
}
