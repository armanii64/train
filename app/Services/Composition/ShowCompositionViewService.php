<?php

namespace App\Services\Composition;

use App\Models\Composition;
use Illuminate\Contracts\View\View;

class ShowCompositionViewService
{
    public function execute(int $id): View
    {
        return view('rollingStock.composition.show', [
            'composition' => Composition::find($id)
        ]);
    }
}
