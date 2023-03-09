<?php

namespace App\Services\Event;

use Illuminate\Contracts\View\View;

class CreateEventViewService
{
    public function execute(): View
    {
        return view("event.create");
    }
}
