<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactLensRequest extends FormRequest
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
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'nullable|string|max:255',
            'brand' => 'nullable|string|max:255',
            'power' => 'nullable',
            'price' => 'nullable',
            'description' => 'nullable|string',
            'water_content' => 'nullable',
            'protection' => 'nullable|string|max:100',
            'usage' => 'nullable|string|max:100',
            'base' => 'nullable',
        ];
    }
}
