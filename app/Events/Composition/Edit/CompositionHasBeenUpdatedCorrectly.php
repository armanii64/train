<?php

namespace App\Events\Composition\Edit;

use App\Models\Composition;

class CompositionHasBeenUpdatedCorrectly
{
    public Composition $composition;

    public function __construct(Composition $composition)
    {
        $this->composition = $composition;
    }

    public function broadcastOn(): array
    {
        return [];
    }
}
