<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
            'desc' => 'required|min:5',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'You have to insert a name',
            'desc.required' => 'You have to insert a description',
            'desc.min' => 'This field must have at least :min characters',
            'image.image' => 'You have to insert an image',
        ];
    }
}
