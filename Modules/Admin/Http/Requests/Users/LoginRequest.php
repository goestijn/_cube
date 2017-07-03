<?php

namespace Modules\Admin\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required|min:6',
            'remember' => 'boolean',
        ];
    }


    public function messages()
    {
        return [
            'username.required' => 'Username is required.',
            'password.required'  => 'The password is required.',
            'password.min' => 'The password must be at least 6 characters.'
        ];
    }

}