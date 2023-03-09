<?php

namespace App\Requests\Event;

use App\Models\RollingStock;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->is_admin;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }
}
