<?php

namespace App\Services\RollingStock;

use App\Models\Event;
use App\Models\RollingStock;
use Illuminate\Contracts\View\View;

class ShowRollingStockViewService
{
    public function execute(int $id): View
    {
        return view('rollingStock.common.show-wrapper', [
            'rollingStock' => RollingStock::find($id)
        ]);
    }
}
