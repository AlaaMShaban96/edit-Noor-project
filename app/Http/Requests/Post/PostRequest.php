<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'type' => 'required',
            'language_code' => 'required', 
            'title' => 'required',
            'content' => 'required','string'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'The Type field is required.',
            'language_code.required' => 'The Language field is required.',
            'title.required' => 'The Title field is required.',
            'content.required' => 'The Content field is required.',
            'content.string' => 'The Content field must be a string.',
         ];
    }

}
