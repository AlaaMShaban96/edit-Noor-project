<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
             'language_code' => 'required', 
            
             'name' => 'required', 
             
             'description' => 'required','string'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'The Image field is required.',
            'language_code.required' => 'The Language field is required.',
            'name.required' => 'The Title field is required.',
            'description.required' => 'The Description field is required.',
            'description.string' => 'The Description field must be a string.',
         ];
    }
}
