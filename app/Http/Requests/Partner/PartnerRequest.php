<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'language_codes' => 'required', 
            
            'names' => 'required', 
            
            'descriptions' => 'required',
             
            // 'image' => 'required', 
        ];
    }
    public function messages()
    {
        return [
            'language_codes.required' => 'required select language_code ', 
            
            'names.required' => 'required enter name', 
            
            'descriptions.required' => 'required enter description ',
             
            'image.required' => 'required select image', 
        ];
    }
}
