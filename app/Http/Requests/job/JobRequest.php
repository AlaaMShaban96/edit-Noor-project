<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'gender' => 'required',
            'language_code' => 'required', 
            'name' => 'required',
            'description' => 'required','string',
            'responsibility' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'skills' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'gender.required' => 'The Gender field is required.',
            'language_code.required' => 'The Language field is required.',
            'name.required' => 'The Name field is required.',
            'description.required' => 'The Description field is required.',
            'description.string' => 'The Description field must be a string.',
            'responsibility.required' => 'The Responsibility field is required.',
            'qualification.required' => 'The Qualification field is required.',
            'experience.required' => 'The Experience field is required.',
            'skills.required' => 'The Skills field is required.',
         ];
    }
}
