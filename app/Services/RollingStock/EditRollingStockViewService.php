<?php

namespace App\Services\RollingStock;

use App\Models\Event;
use App\Models\RollingStock;
use Illuminate\Contracts\View\View;

class EditRollingStockViewService
{
    public function execute(int $id): View
    {
        return view("rollingStock.common.edit", [
            'events' => Event::all(),
            'entity' => RollingStock::find($id)
        ]);
    }
}
