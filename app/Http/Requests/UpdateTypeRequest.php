<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'name' => 'required',
            'boosted_stat' => 'required',
            'desc' => 'required|min:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'base_sprite' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|nullable',
            'ascended_sprite' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|nullable',
        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'You have to insert a name',
            'boosted_stat.required' => 'You have to insert a boosted stat',
            'desc.required' => 'You have to insert a description',
            'desc.min' => 'The description field must have at least :min characters',
            'image.mimes' => 'The file must be in jpeg,png,jpg,gif,svg format',
            'image.max' => 'The image file must not exceed :max kilobytes',
        ];

    }
}
