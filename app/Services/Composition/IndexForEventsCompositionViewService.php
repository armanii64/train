<?php

namespace App\Services\Composition;

use App\Models\Composition;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class IndexForEventsCompositionViewService
{
    public function execute(): View
    {
        return view('rollingStock.composition.index-for-events', [
            'entities' => $this->getEntities()
        ]);
    }

    private function getEntities(): Collection
    {
        return Composition::where('status', '<>', 'in_progress')
            ->where('type', 'copy')
            ->get();
    }
}
