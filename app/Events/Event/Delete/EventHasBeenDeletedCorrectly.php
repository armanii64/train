<?php

namespace App\Events\Event\Delete;

use App\Models\Event;

class EventHasBeenDeletedCorrectly
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
