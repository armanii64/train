<?php

namespace App\Services\Composition;

use App\Models\RollingStock;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

abstract class ManageCompositionViewService
{
    protected abstract function getView(Builder $query, int $id): View;

    public function execute(?int $id = null): View
    {
        $query = RollingStock::with('locomotive', 'freight', 'passenger');
        if (!Auth::user()->is_admin) {
            $query->where('user_id', Auth::id());
        }
        return $this->getView($query, $id);
    }
}
