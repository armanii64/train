<?php

namespace App\Events\RollingStock\Update;

use App\Models\RollingStock;

class RollingStockHasBeenUpdatedCorrectly
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
