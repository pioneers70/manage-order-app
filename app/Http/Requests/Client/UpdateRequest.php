<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|digits:11|unique:clients',
            'passport_number' => 'nullable|integer',
            'passport_series' => 'nullable|integer',
            'passport_issued' => 'nullable|string|max:255',
            'address_registration' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:255',
        ];
    }
}
