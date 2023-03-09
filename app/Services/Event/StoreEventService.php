<?php

namespace App\Services\Event;

use App\Events\Event\Create\EventHasBeenCreatedCorrectly;
use App\Models\Event;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreEventService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(Request $request): RedirectResponse
    {
        $event = new Event($request->all());
        $event->save();
        $this->dispatcher->dispatch(new EventHasBeenCreatedCorrectly($event));
        return redirect(route('event.index'));
    }
}
