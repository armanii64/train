<?php

namespace App\Services\RollingStock;

use App\Services\Freight\UpdateFreightService;
use App\Services\Locomotive\UpdateLocomotiveService;
use App\Services\Passenger\UpdatePassengerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateTrainPartModelService
{
    private UpdateRollingStockService $updateRollingStockService;
    private UpdateLocomotiveService $updateLocomotiveService;
    private UpdatePassengerService $updatePassengerService;
    private UpdateFreightService $updateFreightService;

    public function __construct(
        UpdateRollingStockService $updateRollingStockService,
        UpdateLocomotiveService $updateLocomotiveService,
        UpdatePassengerService $updatePassengerService,
        UpdateFreightService $updateFreightService,
    )
    {
        $this->updateRollingStockService = $updateRollingStockService;
        $this->updateLocomotiveService = $updateLocomotiveService;
        $this->updatePassengerService = $updatePassengerService;
        $this->updateFreightService = $updateFreightService;
    }

    public function execute(Request $request, int $id): RedirectResponse
    {
        $rollingStock = $this->updateRollingStockService->execute($request, $id);
        switch ($rollingStock->model_type) {
            case 'locomotive':
                $locomotive = $request->get('locomotive');
                return $this->updateLocomotiveService->execute($locomotive, $rollingStock);
            case 'passenger':
                $passenger = $request->get('passenger');
                return $this->updatePassengerService->execute($passenger, $rollingStock);
            case 'freight':
                $freight = $request->get('freight');
                return $this->updateFreightService->execute($freight, $rollingStock);
        }
        return redirect("/");
    }
}
