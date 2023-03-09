<?php

namespace App\Services\RollingStock;

use App\Models\RollingStock;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

abstract class GetListModelsAbstractService
{
    protected abstract function getRelationModel(): string;

    protected abstract function getModelType(): string;

    public function execute(): Collection|array
    {
        $query = RollingStock::with($this->getRelationModel())
            ->where('model_type', $this->getModelType());
        if (!Auth::user()->is_admin) {
            $query->where('user_id', Auth::id());
        }
        return $query->get();
    }
}
