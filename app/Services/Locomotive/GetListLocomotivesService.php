<?php

namespace App\Services\Locomotive;

use App\Services\RollingStock\GetListModelsAbstractService;

class GetListLocomotivesService extends GetListModelsAbstractService
{
    protected function getRelationModel(): string
    {
        return 'locomotive';
    }

    protected function getModelType(): string
    {
        return 'locomotive';
    }
}
