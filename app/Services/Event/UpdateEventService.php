<?php

namespace App\Services\Event;

use App\Events\Event\Edit\EventHasBeenUpdatedCorrectly;
use App\Models\Event;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateEventService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(Request $request, int $id): RedirectResponse
    {
        $event = $this->saveAndGetEvent($id, $request);
        $this->dispatcher->dispatch(new EventHasBeenUpdatedCorrectly($event));
        return redirect(route('event.index'));
    }

    private function saveAndGetEvent(int $id, Request $request)
    {
        $event = Event::find($id);
        $event->fill($request->all());
        $event->save();
        return $event;
    }
}
