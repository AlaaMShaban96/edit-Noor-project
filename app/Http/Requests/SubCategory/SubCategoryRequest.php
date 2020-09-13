<?php

namespace App\Http\Requests\SubCategory;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
    

            'names' => 'required', 

            'language_codes' => 'required', 
            
        ];
       
       
        
    }
    public function messages()
    {
        return [
             
            
            'language_codes.required' => 'language code is required', 
            
            'names.required' => 'name is required',
             
           
        ];
    }
}
