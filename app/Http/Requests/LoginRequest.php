<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'Поле Email обязательно для заполнения.',
            'email.email' => 'Поле Email должно содержать корректный адрес электронной почты.',
            'password.required' => 'Поле Пароль обязательно для заполнения.',
            'password.min' => 'Поле Пароль должно содержать не менее :min символов.',
        ];
    }
}
