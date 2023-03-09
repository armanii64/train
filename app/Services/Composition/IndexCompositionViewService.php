<?php

namespace App\Services\Composition;

use App\Models\Composition;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class IndexCompositionViewService
{
    public function execute(): View
    {
        return view('rollingStock.composition.index', [
            'entities' => $this->getEntities()
        ]);
    }

    private function getEntities(): Collection
    {
        return Composition::where('user_id', Auth::id())->get();
    }
}
