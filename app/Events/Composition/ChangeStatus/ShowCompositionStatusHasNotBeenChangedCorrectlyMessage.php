<?php

namespace App\Events\Composition\ChangeStatus;

class ShowCompositionStatusHasNotBeenChangedCorrectlyMessage
{
    public function handle(CompositionStatusHasNotBeenChangedCorrectly $event): void
    {
        $message = [
            ['status' => 'danger', 'message' => "Skład: " . $event->composition->name . ", nie posiada kompletu danych."]
        ];
        session()->flash('flash', $message);
    }
}
