<?php

namespace App\Services\Locomotive;

use App\Models\Freight;
use App\Models\Locomotive;
use App\Models\Passenger;
use App\Services\RollingStock\StoreModelAbstractService;

class StoreLocomotiveService extends StoreModelAbstractService
{
    protected function getModel(array $arrayModel): Locomotive|Passenger|Freight
    {
        return new Locomotive($arrayModel);
    }

    protected function getRedirectPath(): string
    {
        return route('locomotive.index');
    }
}
