<?php

namespace App\Events\Composition\Edit;

class ShowCompositionHasBeenUpdatedCorrectlyMessage
{
    public function handle(CompositionHasBeenUpdatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Skład: " . $event->composition->name . ", został zaktualizowany."]
        ];
        session()->flash('flash', $message);
    }
}
