<?php

namespace App\Services\Composition;

use App\Models\Composition;
use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class CreateCompositionViewService extends ManageCompositionViewService
{
    protected function getView(Builder $query, ?int $id = null): View
    {
        return view('rollingStock.composition.create', [
            'rollingStocks' => $query->orderBy('model_type', 'ASC')->get(),
            'events' => Event::all()
        ]);
    }
}
