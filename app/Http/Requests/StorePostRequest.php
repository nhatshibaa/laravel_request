<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'id-numb' => 'required|size:10',
            'fName' => 'required',
            'lName' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id-numb.required' => 'Please enter identity number!.',
            'id-numb.size' => 'Must be 10 character',
            'fName.required' => 'Please enter first name!',
            'lName.required' => 'Please enter last name!',
            'phone.required' => 'Please enter phone number!'
        ];
    }
}
