<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'language_codes' => 'required', 
            
            'names' => 'required', 
            
            'descriptions' => 'required',
             
            'image' => 'required', 
        ];
    }
    public function messages()
    {
        return [
            'language_codes.required' => 'required', 
            
            'names.required' => 'required', 
            
            'descriptions.required' => 'required',
             
            'image.required' => 'required', 
        ];
    }
}
