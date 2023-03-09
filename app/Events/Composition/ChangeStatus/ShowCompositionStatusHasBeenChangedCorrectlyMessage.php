<?php

namespace App\Events\Composition\ChangeStatus;

class ShowCompositionStatusHasBeenChangedCorrectlyMessage
{
    public function handle(CompositionStatusHasBeenChangedCorrectly $event): void
    {
        $state = match ($event->composition->status) {
            'in_progress' => 'odrzucony',
            'to_accept' => 'przekazany do akceptacji',
            'accepted' => 'zaakceptowany',
        };
        $message = [
            ['status' => 'success', 'message' => "Skład: " . $event->composition->name . ", został $state."]
        ];
        session()->flash('flash', $message);
    }
}
