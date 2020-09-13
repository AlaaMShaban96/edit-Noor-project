<?php

namespace App\Http\Requests\ContectUs\Phone;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
            'phone' => ['required','numeric','digits:10', 'unique:phone_numbers'],
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'The Phone field is required.',
            'phone.numeric' => 'The Phone must be a number.',
            'phone.digits' => 'The Phone must be 10 digits.',
            'phone.unique' => 'The Phone has already been taken.',
         ];
    }
}
