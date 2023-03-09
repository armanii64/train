<?php

namespace App\Models;

use Illuminate\Http\JsonResponse;

class Response
{
    static function build(array $responseType, $data, int $status): JsonResponse
    {
        return response()->json([
            'type' => $responseType['type'],
            'data' => $data,
            'status' => $status
        ], $status);
    }
}
