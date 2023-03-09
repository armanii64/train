<?php

namespace App\Events\Event\Create;

use App\Models\Event;

class EventHasBeenCreatedCorrectly
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
