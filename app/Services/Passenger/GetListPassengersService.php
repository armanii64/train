<?php

namespace App\Services\Passenger;

use App\Services\RollingStock\GetListModelsAbstractService;

class GetListPassengersService extends GetListModelsAbstractService
{
    protected function getRelationModel(): string
    {
        return 'passenger';
    }

    protected function getModelType(): string
    {
        return 'passenger';
    }
}
