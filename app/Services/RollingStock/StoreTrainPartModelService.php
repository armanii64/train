<?php

namespace App\Services\RollingStock;

use App\Services\Freight\StoreFreightService;
use App\Services\Locomotive\StoreLocomotiveService;
use App\Services\Passenger\StorePassengerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreTrainPartModelService
{
    private StoreRollingStockService $storeRollingStockService;
    private StoreLocomotiveService $storeLocomotiveService;
    private StorePassengerService $storePassengerService;
    private StoreFreightService $storeFreightService;

    public function __construct(
        StoreRollingStockService $storeRollingStockService,
        StoreLocomotiveService $storeLocomotiveService,
        StorePassengerService $storePassengerService,
        StoreFreightService $storeFreightService,
    )
    {
        $this->storeRollingStockService = $storeRollingStockService;
        $this->storeLocomotiveService = $storeLocomotiveService;
        $this->storePassengerService = $storePassengerService;
        $this->storeFreightService = $storeFreightService;
    }

    public function execute(Request $request): RedirectResponse
    {
        $rollingStock = $this->storeRollingStockService->execute($request);
        switch ($rollingStock->model_type) {
            case 'locomotive':
                $locomotive = $request->get('locomotive');
                return $this->storeLocomotiveService->execute($locomotive, $rollingStock);
            case 'passenger':
                $passenger = $request->get('passenger');
                return $this->storePassengerService->execute($passenger, $rollingStock);
            case 'freight':
                $freight = $request->get('freight');
                return $this->storeFreightService->execute($freight, $rollingStock);
        }
        return redirect("/");
    }
}
