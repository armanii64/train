<?php

namespace App\Events\RollingStock\Delete;

use App\Models\RollingStock;

class RollingStockHasBeenDeletedCorrectly
{
    public RollingStock $rollingStock;

    public function __construct(RollingStock $rollingStock)
    {
        $this->rollingStock = $rollingStock;
    }

    public function broadcastOn(): array
    {
        return [];
    }
}
