<?php

namespace App\Events\Event\Edit;

class ShowEventHasBeenUpdatedCorrectlyMessage
{
    public function handle(EventHasBeenUpdatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Impreza: " . $event->event->name . ", została zaktualizowana."]
        ];
        session()->flash('flash', $message);
    }
}
