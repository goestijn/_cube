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
            'email' => 'required|email',
            'password' => 'required|min:6',
            'remember' => 'boolean',
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'Email Address is required.',
            'email.email' => 'The Email Address must be a valid email address.',
            'password.required'  => 'The password is required.',
            'password.min' => 'The password must be at least 6 characters.'
        ];
    }

}