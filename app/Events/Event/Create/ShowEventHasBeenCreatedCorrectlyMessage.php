<?php

namespace App\Events\Event\Create;

class ShowEventHasBeenCreatedCorrectlyMessage
{
    public function handle(EventHasBeenCreatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Impreza: " . $event->event->name . ", dodana prawidłowo."]
        ];
        session()->flash('flash', $message);
    }
}
