<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequestRegistration extends FormRequest
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
            'password'=>'min:14',
            'password_confirmation'=>'min:15',
        ];
    }
    public function messages()
    {
        return [
            'password.min' => 'пупупупупу',
            'password_confirmation.min' => 'feee',
        ];
    }
}
