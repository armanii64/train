<?php

namespace App\Services\Freight;

use App\Models\RollingStock;
use App\Services\RollingStock\DeleteModelAbstractService;

class DeleteFreightService extends DeleteModelAbstractService
{
    protected function extraAction(RollingStock $rollingStock): void
    {
        $rollingStock->locomotive()->delete();
    }
}
