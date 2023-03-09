<?php

namespace App\Events\RollingStock\Create;

class ShowRollingStockHasBeenCreatedCorrectlyMessage
{
    public function handle(RollingStockHasBeenCreatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Element taboru: " . $event->rollingStock->number . ", dodano prawidłowo."]
        ];
        session()->flash('flash', $message);
    }
}
