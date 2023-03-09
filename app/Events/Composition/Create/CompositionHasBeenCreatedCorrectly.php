<?php

namespace App\Events\Composition\Create;

use App\Models\Composition;

class CompositionHasBeenCreatedCorrectly
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
