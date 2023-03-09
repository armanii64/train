<?php

namespace App\Services\Event;

use App\Models\Event;
use Illuminate\Contracts\View\View;

class EditEventViewService
{
    public function execute(int $id): View
    {
        return view("event.edit", [
            'entity' => Event::find($id)
        ]);
    }
}
