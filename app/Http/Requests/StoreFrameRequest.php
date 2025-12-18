<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFrameRequest extends FormRequest
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
            'image' => 'required|image|max:2048',

            'frame_type_id' => 'required',
            'new_frame_type' => 'required_if:frame_type_id,new|max:255',

            'material_id' => 'required',
            'new_material' => 'required_if:material_id,new|max:255',
        ];
    }
}
