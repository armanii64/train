<?php

namespace App\Events\Event\Delete;

class ShowEventHasBeenDeletedCorrectlyMessage
{
    public function handle(EventHasBeenDeletedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Impreza: " . $event->event->name . ", została usunięta."]
        ];
        session()->flash('flash', $message);
    }
}
