<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
<<<<<<< HEAD
        return [
           
            'category_id' => 'required', 
            
            'language_codes' => 'required', 
=======
        return true;
    }
>>>>>>> 7a842d9b0cef5e60d9d031d6a1f615100a3bad9f

            'names' => 'required', 

            'image' => 'required', 
            
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'required', 
            
            'language_codes.required' => 'required', 
            
            'names.required' => 'required',
             
            'image.required' => 'required', 
        ];
    }
}
