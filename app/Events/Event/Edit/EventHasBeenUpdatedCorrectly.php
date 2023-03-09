<?php

namespace App\Events\Event\Edit;

use App\Models\Event;

class EventHasBeenUpdatedCorrectly
{
    public Event $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function broadcastOn(): array
    {
        return [];
    }
}
