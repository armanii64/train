<?php

namespace App\Requests\Composition;

use App\Models\RollingStock;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateCompositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'composition.name' => 'required',
        ];
    }
}
