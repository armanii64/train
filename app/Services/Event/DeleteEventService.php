<?php

namespace App\Services\Event;

use App\Events\Event\Delete\EventHasBeenDeletedCorrectly;
use App\Models\Event;
use App\Models\Response;
use App\Models\ResponseType;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\JsonResponse;

class DeleteEventService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(int $id): JsonResponse
    {
        $event = Event::find($id);
        $event->rollingStocks()->detach();
        $event->delete();

        $this->dispatcher->dispatch(new EventHasBeenDeletedCorrectly($event));
        return Response::build(ResponseType::SUCCESS, [], 200);
    }
}
