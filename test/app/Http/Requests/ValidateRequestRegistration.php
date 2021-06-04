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
            'form.password'=>'min:5|max:10',
            'form.old_password'=>'same:form.password',
            'form.email'=>'email',
            'form.surname'=>'min:2|max:50',
            'form.name'=>'min:2|max:50',
            'form.secondname'=>'min:2|max:50',
        ];
    }
    public function messages()
    {
        return [
            'form.surname.min' => 'Пароль должен быть от 2  символов',
            'form.name.min' => 'Пароль должен быть от 2  символов',
            'form.secondname.min' => 'Пароль должен быть от 2 символов',
            'form.surname.max' => 'Пароль должен быть  до 50 символов',
            'form.name.max' => 'Пароль должен быть до 50 символов',
            'form.secondname.max' => 'Пароль должен быть   до 50 символов',
            'form.email.email' => 'E-mail некорректный',
            'form.password' => 'Пароль должен быть от 5 и до 10 символов',
            'form.old_password.same' => 'Пароли не совпадают',
        ];
    }
}
