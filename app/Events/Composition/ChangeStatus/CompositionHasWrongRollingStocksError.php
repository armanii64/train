<?php

namespace App\Events\Composition\ChangeStatus;

use App\Models\Composition;

class CompositionHasWrongRollingStocksError
{
    public Composition $composition;

    public function __construct($composition)
    {
        $this->composition = $composition;
    }

    public function broadcastOn(): array
    {
        return [];
    }
}
