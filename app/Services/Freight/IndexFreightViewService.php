<?php

namespace App\Services\Freight;

use Illuminate\Contracts\View\View;

class IndexFreightViewService
{
    private GetListFreightsService $getListFreightsService;

    public function __construct(
        GetListFreightsService $getListFreightsService
    )
    {
        $this->getListFreightsService = $getListFreightsService;
    }

    public function execute(): View
    {
        return view("rollingStock.common.index", [
            'entities' => $this->getListFreightsService->execute(),
            'type' => 'freight',
            'tdCounts' => 41
        ]);
    }
}
