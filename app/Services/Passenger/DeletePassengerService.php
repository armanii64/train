<?php

namespace App\Services\Passenger;

use App\Models\RollingStock;
use App\Services\RollingStock\DeleteModelAbstractService;

class DeletePassengerService extends DeleteModelAbstractService
{
    protected function extraAction(RollingStock $rollingStock): void
    {
        $rollingStock->passenger()->delete();
    }
}
