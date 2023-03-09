<?php

namespace App\Http\Controllers;

use App\Requests\RollingStock\DeleteRollingStockRequest;
use App\Services\Passenger\DeletePassengerService;
use App\Services\Passenger\IndexPassengerViewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class PassengerController extends Controller
{
    private IndexPassengerViewService $indexPassengerViewService;
    private DeletePassengerService $deletePassengerService;

    public function __construct(
        IndexPassengerViewService $indexPassengerViewService,
        DeletePassengerService $deletePassengerService
    )
    {
        $this->indexPassengerViewService = $indexPassengerViewService;
        $this->deletePassengerService = $deletePassengerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->indexPassengerViewService->execute();
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
        return $this->deletePassengerService->execute($id);
    }
}
