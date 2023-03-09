<?php

namespace App\Services\File;

use Illuminate\Http\UploadedFile;

class FileService
{
    public function save(?UploadedFile $file, string $pathToFolder): ?string
    {
        if (is_file($file))
        {
            return $file->store($pathToFolder);
        }
        return null;
    }

    public function remove($file): void
    {
        if ($file != null && file_exists($file)) {
            unlink($file);
        }
    }
}
