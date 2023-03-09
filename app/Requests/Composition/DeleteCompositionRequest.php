<?php

namespace App\Requests\Composition;

use App\Models\Composition;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DeleteCompositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        $composition = Composition::find($this->route('id'));
        return $composition->user_id == Auth::id() || Auth::user()->is_admin && is_null($composition->original);
    }

    public function rules(): array
    {
        return [];
    }
}
