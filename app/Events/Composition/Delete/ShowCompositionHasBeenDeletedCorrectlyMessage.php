<?php

namespace App\Events\Composition\Delete;

class ShowCompositionHasBeenDeletedCorrectlyMessage
{
    public function handle(CompositionHasBeenDeletedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Skład: " . $event->composition->name . ", został usunięty."]
        ];
        session()->flash('flash', $message);
    }
}
