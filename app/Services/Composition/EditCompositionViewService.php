<?php

namespace App\Services\Composition;

use App\Models\Composition;
use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class EditCompositionViewService extends ManageCompositionViewService
{
    protected function getView(Builder $query, ?int $id = null): View
    {
        $composition = Composition::find($id);
        return view('rollingStock.composition.edit', [
            'composition' => $composition,
            'rollingStocks' => $query->orderBy('model_type', 'ASC')->get(),
            'events' => Event::all(),
            'isAccepted' => $composition->status == "accepted"
        ]);
    }
}
