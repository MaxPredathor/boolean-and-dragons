<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'name' => 'required|min:5|max:200',
            'description' => 'required|max:500',
            'attack' => 'required|integer',
            'defence' => 'required|integer',
            'speed' => 'required|integer',
            'life' => 'required|integer',
            'type_id' => 'required|exists:types,id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'attack.required' => 'The attack is required',
            'defence.required' => 'The defense is required',
            'speed.required' => 'The speed is required',
            'life.required' => 'The life is required',
            'name.min' => 'The name must be at least :min characters',
            'name.max' => 'The name must be at most :max characters',
            'description.max' => 'The description must be at most :max characters',
            'description.required' => 'The description is required',
            'life.integer' => 'The life must be an integer',
            'attack.integer' => 'The attack must be an integer',
            'defence.integer' => 'The defence must be an integer',
            'speed.integer' => 'The speed must be an integer',
            'type_id.exists' => 'The class does not exist',
            'type_id.required' => 'The class is required',
        ];
    }
}
