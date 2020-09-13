<?php

namespace App\Http\Requests\ContectUs\Address;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'name' => ['required','unique:our_address_translations'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Address field is required.',
            'name.unique' => 'The Address has already been taken.',
         ];
    }
}
