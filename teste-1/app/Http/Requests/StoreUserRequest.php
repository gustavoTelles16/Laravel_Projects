<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|between:3,255',
            'phone' => ['regex:/^[0-9]{10,15}$/'],
            'email' => 'required|email:rfc, dns|unique:users,email',
            'password' => 'required|between:12,255|confirmed',
            'password_confirmation' => 'required|between:12,255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatório.',
            'name.min' => 'Nome deve conter pelo menos 3 letras.',
            'name.max' => 'Nome deve conter no máximo 255 letras.',
            'phone.regex' => 'Telefone deve conter DDD e apenas números.',
            'email.required' => 'E-mail é obrigatório.',
            'email.email' => 'E-mail deve ser válido.',
            'email.unique' => 'E-mail já cadastrado.',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve conter pelo menos 12 caracteres (letras, números ou símbolos).',
            'password.max' => 'Senha deve conter no máximo 255 caracteres (letras, números ou símbolos).',
            'password.confirmed' => 'As senhas devem ser iguais.',
            'password_confirmation.required' => 'Confirmação de senha é obrigatório',
            'password_confirmation.min' => 'Confirmação de senha deve conter pelo menos 12 caracteres (letras, números ou símbolos).',
            'password_confirmation.max' => 'Confirmação de senha deve conter no máximo 255 caracteres (letras, números ou símbolos).',
        ];
    }
}
