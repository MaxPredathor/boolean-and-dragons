<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => 'required|min:3|max:200',
            'category' => 'required|min:5|max:100',
            'type' => 'required|min:1|max:100',
            'weight' => 'required|min:1|max:10',
            'cost' => 'required|min:1|max:10',
            'image' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'name.min' => 'The name must be at least :min characters',
            'name.max' => 'The name must not be greater than :max characters',
            'category.required' => 'The category is required',
            'category.min' => 'The category must be at least :min characters',
            'category.max' => 'The category must not be greater than :max characters',
            'type.required' => 'The type is required',
            'type.min' => 'The type must be at least :min characters',
            'type.max' => 'The type must not be greater than :max characters',
            'weight.required' => 'The weight is required',
            'weight.min' => 'The weight must be at least :min characters',
            'weight.max' => 'The weight must not be greater than :max characters',
            'cost.required' => 'The cost is required',
            'cost.min' => 'The cost must be at least :min characters',
            'cost.max' => 'The cost must not be greater than :max characters',
        ];
    }
}
