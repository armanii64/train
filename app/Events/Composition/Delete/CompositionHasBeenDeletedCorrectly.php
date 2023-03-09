<?php

namespace App\Events\Composition\Delete;

use App\Models\Composition;

class CompositionHasBeenDeletedCorrectly
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
