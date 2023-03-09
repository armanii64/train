<?php

namespace App\Services\Passenger;

use Illuminate\Contracts\View\View;

class IndexPassengerViewService
{
    private GetListPassengersService $getListPassengersService;

    public function __construct(
        GetListPassengersService $getListPassengersService
    )
    {
        $this->getListPassengersService = $getListPassengersService;
    }

    public function execute(): View
    {
        return view("rollingStock.common.index", [
            'entities' => $this->getListPassengersService->execute(),
            'type' => 'passenger',
            'tdCounts' => 38
        ]);
    }
}
