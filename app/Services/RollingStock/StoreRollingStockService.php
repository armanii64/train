<?php

namespace App\Services\RollingStock;

use App\Models\RollingStock;
use App\Services\File\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreRollingStockService
{
    private FileService $fileService;

    public function __construct(
        FileService $fileService
    )
    {
        $this->fileService = $fileService;
    }

    public function execute(Request $request): RollingStock
    {
        $imagePath = $this->saveFileAndGetPath($request);
        $rollingStock = new RollingStock($request->get('common'));
        $rollingStock->user_id = Auth::id();
        $rollingStock->image_path = $imagePath;
        $rollingStock->save();
        $this->attachEvents($request, $rollingStock);
        return $rollingStock;
    }

    private function saveFileAndGetPath(Request $request): ?string
    {
        $file = $request->file('image');
        return $this->fileService->save($file, 'images');
    }

    private function attachEvents(Request $request, RollingStock $rollingStock): void
    {
        $eventIds = $request->get('events');
        if (is_array($eventIds)) {
            $rollingStock->events()->attach($eventIds);
        }
    }
}
