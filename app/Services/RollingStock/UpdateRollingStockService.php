<?php

namespace App\Services\RollingStock;

use App\Models\RollingStock;
use App\Services\File\FileService;
use Illuminate\Http\Request;

class UpdateRollingStockService
{
    private FileService $fileService;

    public function __construct(
        FileService $fileService
    )
    {
        $this->fileService = $fileService;
    }

    public function execute(Request $request, int $id): RollingStock
    {
        $rollingStock = RollingStock::find($id);
        $this->removeSaveFileAndGetPath($request, $rollingStock);
        $rollingStock->fill($request->get('common'));
        $rollingStock->save();
        $this->attachEvents($request, $rollingStock);
        return $rollingStock;
    }

    private function removeSaveFileAndGetPath(Request $request, RollingStock $rollingStock): void
    {
        $file = $request->file('image');
        if (!is_null($file)) {
            $this->fileService->remove($rollingStock->image_path);
            $rollingStock->image_path = $this->fileService->save($file, 'images');
        }
    }

    private function attachEvents(Request $request, RollingStock $rollingStock): void
    {
        $rollingStock->events()->detach();
        $eventIds = $request->get('events');
        if (is_array($eventIds)) {
            $rollingStock->events()->attach($eventIds);
        }
    }
}
