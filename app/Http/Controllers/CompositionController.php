<?php

namespace App\Http\Controllers;

use App\Requests\Composition\ChangeStatusCompositionRequest;
use App\Requests\Composition\CreateCompositionRequest;
use App\Requests\Composition\DeleteCompositionRequest;
use App\Requests\Composition\EditCompositionRequest;
use App\Requests\Composition\ShowCompositionRequest;
use App\Requests\Composition\UpdateCompositionRequest;
use App\Services\Composition\ChangeStatusCompositionService;
use App\Services\Composition\CreateCompositionViewService;
use App\Services\Composition\DeleteCompositionService;
use App\Services\Composition\EditCompositionViewService;
use App\Services\Composition\IndexCompositionViewService;
use App\Services\Composition\IndexForEventsCompositionViewService;
use App\Services\Composition\ShowCompositionViewService;
use App\Services\Composition\StoreCompositionService;
use App\Services\Composition\UpdateCompositionService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CompositionController extends Controller
{
    private IndexCompositionViewService $indexCompositionViewService;
    private IndexForEventsCompositionViewService $indexForEventsCompositionViewService;
    private CreateCompositionViewService $createCompositionViewService;
    private StoreCompositionService $storeCompositionService;
    private ShowCompositionViewService $showCompositionViewService;
    private EditCompositionViewService $editCompositionViewService;
    private UpdateCompositionService $updateCompositionService;
    private ChangeStatusCompositionService $changeStatusCompositionService;
    private DeleteCompositionService $deleteCompositionService;

    public function __construct(
        IndexCompositionViewService $indexViewCompositionService,
        IndexForEventsCompositionViewService $indexForEventsViewCompositionService,
        CreateCompositionViewService $createCompositionViewService,
        StoreCompositionService $storeCompositionService,
        ShowCompositionViewService $showCompositionViewService,
        EditCompositionViewService $editCompositionViewService,
        UpdateCompositionService $updateCompositionService,
        ChangeStatusCompositionService $changeStatusCompositionService,
        DeleteCompositionService $deleteCompositionService
    )
    {
        $this->indexCompositionViewService = $indexViewCompositionService;
        $this->indexForEventsCompositionViewService = $indexForEventsViewCompositionService;
        $this->createCompositionViewService = $createCompositionViewService;
        $this->storeCompositionService = $storeCompositionService;
        $this->showCompositionViewService = $showCompositionViewService;
        $this->editCompositionViewService = $editCompositionViewService;
        $this->updateCompositionService = $updateCompositionService;
        $this->changeStatusCompositionService = $changeStatusCompositionService;
        $this->deleteCompositionService = $deleteCompositionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->indexCompositionViewService->execute();
    }

    /**
     * Display a listing of the resource to accept.
     *
     * @return View
     */
    public function indexForEvents(): View
    {
        return $this->indexForEventsCompositionViewService->execute();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return $this->createCompositionViewService->execute();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCompositionRequest $request
     * @return RedirectResponse
     */
    public function store(CreateCompositionRequest $request): RedirectResponse
    {
        return $this->storeCompositionService->execute($request);
    }

    /**
     * Display the specified resource.
     *
     * @param ShowCompositionRequest $request
     * @param int $id
     * @return View
     */
    public function show(ShowCompositionRequest $request, int $id): View
    {
        return $this->showCompositionViewService->execute($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EditCompositionRequest $request
     * @param int $id
     * @return View
     */
    public function edit(EditCompositionRequest $request, int $id): View
    {
        return $this->editCompositionViewService->execute($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompositionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateCompositionRequest $request, int $id): RedirectResponse
    {
        return $this->updateCompositionService->execute($request, $id);
    }

    /**
     * Change status of the specified resource in storage.
     *
     * @param ChangeStatusCompositionRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function changeStatus(ChangeStatusCompositionRequest $request, int $id): JsonResponse
    {
        return $this->changeStatusCompositionService->execute($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteCompositionRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(DeleteCompositionRequest $request, int $id): JsonResponse
    {
        return $this->deleteCompositionService->execute($id);
    }
}
