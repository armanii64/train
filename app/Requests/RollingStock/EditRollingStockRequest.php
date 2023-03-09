<?php

namespace App\Requests\RollingStock;

use App\Models\RollingStock;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditRollingStockRequest extends FormRequest
{
    public function authorize(): bool
    {
        $rollingStock = RollingStock::find($this->route('id'));
        return $rollingStock->user_id == Auth::id() || Auth::user()->is_admin;
    }

    public function rules(): array
    {
        return [];
    }
}
