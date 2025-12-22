<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactLensRequest extends FormRequest
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'power' => 'required',
            'price' => 'nullable',
            'description' => 'required|string',
            'water_content' => 'required',
            'protection' => 'required|string|max:100',
            'usage' => 'required|string|max:100',
            'base' => 'required',
        ];
    }
}
