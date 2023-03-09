<?php

namespace App\Services\Freight;

use App\Models\RollingStock;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ExportFreightService
{
    public function execute(int $id): Response
    {
        $entity = $this->getModel($id);
        $exportView = PDF::loadView('rollingStock.freight.export', $entity);
        return $exportView->stream($this->getFileName($entity) . '.pdf');
    }

    private function getModel(int $id): Model
    {
        return RollingStock::with('freight')
            ->where('id', $id)
            ->first();
    }

    private function getFileName(Model|null $entity): string
    {
        return str_replace(" ", "_", $entity->number);
    }
}
