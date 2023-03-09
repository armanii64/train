<?php

namespace App\Http\Controllers;

use App\Requests\Event\DeleteEventRequest;
use App\Requests\Event\EventRequest;
use App\Services\Event\CreateEventViewService;
use App\Services\Event\DeleteEventService;
use App\Services\Event\EditEventViewService;
use App\Services\Event\IndexEventViewService;
use App\Services\Event\StoreEventService;
use App\Services\Event\UpdateEventService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private IndexEventViewService $indexEventViewService;
    private CreateEventViewService $createEventViewService;
    private StoreEventService $storeEventService;
    private EditEventViewService $editEventViewService;
    private UpdateEventService $updateEventService;
    private DeleteEventService $deleteEventService;

    public function __construct(
        IndexEventViewService $indexEventViewService,
        CreateEventViewService $createEventViewService,
        StoreEventService $storeEventService,
        EditEventViewService $editEventViewService,
        UpdateEventService $updateEventService,
        DeleteEventService $deleteEventService
    )
    {
        $this->indexEventViewService = $indexEventViewService;
        $this->createEventViewService = $createEventViewService;
        $this->storeEventService = $storeEventService;
        $this->editEventViewService = $editEventViewService;
        $this->updateEventService = $updateEventService;
        $this->deleteEventService = $deleteEventService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->indexEventViewService->execute();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return $this->createEventViewService->execute();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return RedirectResponse
     */
    public function store(EventRequest $request): RedirectResponse
    {
        return $this->storeEventService->execute($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return $this->editEventViewService->execute($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(EventRequest $request, int $id): RedirectResponse
    {
        return $this->updateEventService->execute($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(Request $request, int $id): JsonResponse
    {
        return $this->deleteEventService->execute($id);
    }
}
