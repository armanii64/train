<?php

namespace App\Requests\RollingStock;

use App\Models\RollingStock;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateRollingStockRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'common.number' => 'required',
        ];
    }
}
