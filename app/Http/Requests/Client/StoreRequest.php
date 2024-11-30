<?php

namespace App\Http\Requests\Client;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|digits:11|unique:clients',
            'passport_number' => 'nullable|string|',
            'passport_series' => 'nullable|string',
            'passport_issued' => 'nullable|string|max:255',
            'address_registration' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:255',
        ];
    }
}
