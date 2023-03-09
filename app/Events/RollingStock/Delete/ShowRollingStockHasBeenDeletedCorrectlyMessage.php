<?php

namespace App\Events\RollingStock\Delete;

class ShowRollingStockHasBeenDeletedCorrectlyMessage
{
    public function handle(RollingStockHasBeenDeletedCorrectly $event): void
    {
        $message = [
            ['status' => 'success', 'message' => "Element taboru o id: " . $event->rollingStock->id . ", został usunięty."]
        ];
        session()->flash('flash', $message);
    }
}
