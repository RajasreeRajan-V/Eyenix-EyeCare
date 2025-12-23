<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollectionRequest extends FormRequest
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
        'name'        => 'required|unique:collections,name',
        'price'       => 'nullable',
        'front_image' => 'required|image|mimes:jpg,jpeg,png,webp',
        'back_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'type'        => 'required',
        'gender'      => 'required',
        'brand_id'    => 'required|exists:brands,id',
        'shape_id'    => 'required|exists:shapes,id',
        'frame_id'    => 'required|exists:frames,id',
        'colors'      => 'nullable|array',
        'colors.*'    => 'exists:product_colors,id',
        'description' => 'nullable',
    ];
    }
}
