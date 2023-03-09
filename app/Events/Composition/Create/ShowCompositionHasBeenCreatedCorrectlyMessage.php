<?php

namespace App\Events\Composition\Create;

class ShowCompositionHasBeenCreatedCorrectlyMessage
{
    public function handle(CompositionHasBeenCreatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Skład: " . $event->composition->name . ", dodana prawidłowo."]
        ];
        session()->flash('flash', $message);
    }
}
