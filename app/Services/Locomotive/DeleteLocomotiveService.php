<?php

namespace App\Services\Locomotive;

use App\Models\RollingStock;
use App\Services\RollingStock\DeleteModelAbstractService;

class DeleteLocomotiveService extends DeleteModelAbstractService
{
    protected function extraAction(RollingStock $rollingStock): void
    {
        $rollingStock->locomotive()->delete();
    }
}
