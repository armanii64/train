<?php

namespace App\Http\Controllers;

use App\Requests\RollingStock\DeleteRollingStockRequest;
use App\Requests\RollingStock\ExportRollingStockRequest;
use App\Services\Freight\DeleteFreightService;
use App\Services\Freight\ExportFreightService;
use App\Services\Freight\IndexFreightViewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class FreightController extends Controller
{
    private IndexFreightViewService $indexFreightViewService;
    private ExportFreightService $exportFreightService;
    private DeleteFreightService $deleteFreightService;

    public function __construct(
        IndexFreightViewService $indexFreightViewService,
        ExportFreightService $exportFreightService,
        DeleteFreightService $deleteFreightService
    )
    {
        $this->indexFreightViewService = $indexFreightViewService;
        $this->exportFreightService = $exportFreightService;
        $this->deleteFreightService = $deleteFreightService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->indexFreightViewService->execute();
    }

    /**
     * PDF export the specified resource from storage.
     *
     * @param ExportRollingStockRequest $request
     * @param int $id
     * @return Response
     */
    public function export(ExportRollingStockRequest $request, int $id): Response
    {
        return $this->exportFreightService->execute($id);
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
        return $this->deleteFreightService->execute($id);
    }
}
