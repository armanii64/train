<?php

namespace App\Services\Event;

use App\Models\Event;
use Illuminate\Contracts\View\View;

class IndexEventViewService
{
    public function execute(): View
    {
        return view("event.index", [
            'entities' => Event::all()
        ]);
    }
}
