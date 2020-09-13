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
            'link' => ['required','unique:emails','regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'The Email field is required.',
            'phone.regex' => 'The Email field must be link formatting',
            'phone.unique' => 'The Email has already been taken.',
         ];
    }
}
