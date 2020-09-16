<?php

namespace App\Http\Requests\ContectUs\Email;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'link' => ['required',
            'unique:emails']
        ];
    }

    public function messages()
    {
        return [
            'link.required' => 'The Email field is required.',
            'link.regex' => 'The Email field must be link formatting',
            'link.unique' => 'The Email has already been taken.',
         ];
    }
}
