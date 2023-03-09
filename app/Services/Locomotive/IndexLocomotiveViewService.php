<?php

namespace App\Services\Locomotive;

use Illuminate\Contracts\View\View;

class IndexLocomotiveViewService
{
    private GetListLocomotivesService $getListLocomotivesService;

    public function __construct(
        GetListLocomotivesService $getListLocomotivesService
    )
    {
        $this->getListLocomotivesService = $getListLocomotivesService;
    }

    public function execute(): View
    {
        return view("rollingStock.common.index", [
            'entities' => $this->getListLocomotivesService->execute(),
            'type' => 'locomotive',
            'tdCounts' => 44
        ]);
    }
}
