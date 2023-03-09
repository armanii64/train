<?php

namespace App\Services\RollingStock;

use App\Models\Event;
use Illuminate\Contracts\View\View;

class CreateRollingStockViewService
{
    public function execute(): View
    {
        return view("rollingStock.common.create", [
            'events' => Event::all()
        ]);
    }
}
