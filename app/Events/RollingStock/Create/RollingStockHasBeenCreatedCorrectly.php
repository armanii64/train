<?php

namespace App\Events\RollingStock\Create;

use App\Models\RollingStock;

class RollingStockHasBeenCreatedCorrectly
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
