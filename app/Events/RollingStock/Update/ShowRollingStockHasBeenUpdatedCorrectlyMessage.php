<?php

namespace App\Events\RollingStock\Update;

class ShowRollingStockHasBeenUpdatedCorrectlyMessage
{
    public function handle(RollingStockHasBeenUpdatedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Element taboru: " . $event->rollingStock->number . ", zaktualizowano poprawnie."]
        ];
        session()->flash('flash', $message);
    }
}
