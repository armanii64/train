<?php

namespace App\Http\Controllers;

use App\Requests\RollingStock\CreateRollingStockRequest;
use App\Requests\RollingStock\EditRollingStockRequest;
use App\Requests\RollingStock\ShowRollingStockRequest;
use App\Requests\RollingStock\UpdateRollingStockRequest;
use App\Services\RollingStock\CreateRollingStockViewService;
use App\Services\RollingStock\EditRollingStockViewService;
use App\Services\RollingStock\ShowRollingStockViewService;
use App\Services\RollingStock\StoreTrainPartModelService;
use App\Services\RollingStock\UpdateTrainPartModelService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RollingStockController extends Controller
{
    private CreateRollingStockViewService $createRollingStockViewService;
    private StoreTrainPartModelService $storeTrainPartModelService;
    private ShowRollingStockViewService $showRollingStockViewService;
    private EditRollingStockViewService $editRollingStockViewService;
    private UpdateTrainPartModelService $updateTrainPartModelService;

    public function __construct(
        CreateRollingStockViewService $createRollingStockViewService,
        StoreTrainPartModelService $storeTrainPartModelService,
        ShowRollingStockViewService $showRollingStockViewService,
        EditRollingStockViewService $editRollingStockViewService,
        UpdateTrainPartModelService $updateTrainPartModelService
    )
    {
        $this->createRollingStockViewService = $createRollingStockViewService;
        $this->storeTrainPartModelService = $storeTrainPartModelService;
        $this->showRollingStockViewService = $showRollingStockViewService;
        $this->editRollingStockViewService = $editRollingStockViewService;
        $this->updateTrainPartModelService = $updateTrainPartModelService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return $this->createRollingStockViewService->execute();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRollingStockRequest $request
     * @return RedirectResponse
     */
    public function store(CreateRollingStockRequest $request): RedirectResponse
    {
        return $this->storeTrainPartModelService->execute($request);
    }

    /**
     * Display the specified resource.
     *
     * @param ShowRollingStockRequest $request
     * @param int $id
     * @return View
     */
    public function show(ShowRollingStockRequest $request, int $id): View
    {
        return $this->showRollingStockViewService->execute($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EditRollingStockRequest $request
     * @param int $id
     * @return View
     */
    public function edit(EditRollingStockRequest $request, int $id): View
    {
        return $this->editRollingStockViewService->execute($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRollingStockRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRollingStockRequest $request, int $id): RedirectResponse
    {
        return $this->updateTrainPartModelService->execute($request, $id);
    }
}
