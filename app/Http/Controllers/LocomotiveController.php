<?php

namespace App\Http\Controllers;

use App\Requests\RollingStock\DeleteRollingStockRequest;
use App\Services\Locomotive\DeleteLocomotiveService;
use App\Services\Locomotive\IndexLocomotiveViewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class LocomotiveController extends Controller
{
    private IndexLocomotiveViewService $indexLocomotiveViewService;
    private DeleteLocomotiveService $deleteLocomotiveService;

    public function __construct(
        IndexLocomotiveViewService $indexLocomotiveViewService,
        DeleteLocomotiveService $deleteLocomotiveService
    )
    {
        $this->indexLocomotiveViewService = $indexLocomotiveViewService;
        $this->deleteLocomotiveService = $deleteLocomotiveService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->indexLocomotiveViewService->execute();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteRollingStockRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(DeleteRollingStockRequest $request, int $id): JsonResponse
    {
        return $this->deleteLocomotiveService->execute($id);
    }
}
