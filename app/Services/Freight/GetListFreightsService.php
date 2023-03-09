<?php

namespace App\Services\Freight;

use App\Services\RollingStock\GetListModelsAbstractService;

class GetListFreightsService extends GetListModelsAbstractService
{
    protected function getRelationModel(): string
    {
        return 'freight';
    }

    protected function getModelType(): string
    {
        return 'freight';
    }
}
