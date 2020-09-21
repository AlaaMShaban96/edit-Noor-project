<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:40'], 
            // 'email' => ['required', 'string', 'email', 'max:50', 'unique:admins'],
            'password'=> ['nullable','string', 'min:8','confirmed'],
            'active' => ['required'],
            'role' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name field is required.',
            'name.string' => 'The Name field must be a string.',
            'name.max' => 'The Name field has not more that 40 chars.',
            
            // 'email.required' => 'The Email field is required.',
            // 'email.string' => 'The Email field must be a string.',
            // 'email.email' => 'The Email field is missing email formating.',
            // 'email.max' => 'The Email field has not more that 50 chars.',
            // 'email.unique' => 'The email has already been taken.',
            
            'password.string' => 'The Password field must be a string.',
            'password.min' => 'The Password field must be at least 8 characters.',
            'password.same' => 'The password confirmation does not match.',
            'password.confirmed' => 'The password confirmation does not match.',

            'active.required' => 'active required', 
             
            'role.required' => 'role required', 
            
            'passwordConfrim.string' => 'The Password field must be a string.',
            'passwordConfrim.min' => 'The Password field must be at least 8 characters.',
            'passwordConfrim.same' => 'The password confirmation does not match.',
        ];
    }
}
