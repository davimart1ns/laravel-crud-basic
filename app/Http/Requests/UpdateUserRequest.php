<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' => 'required|sometimes',
            'email' => 'required|sometimes|email|unique:users,email,' . $user->id,
            'password' => 'required|sometimes|min:6'

        ];
    }

    public function messages() : array 
    {
        return [
            'name.required' => "O campo nome é obrigatório!",
            'email.required' => 'O campo e-mail é obrigatório!',
            'email.email' => 'Necessário enviar um e-mail válido!',
            'email.unique' => 'O e-mail já está cadastrado!', 
            'password.required' => 'O campo senha é obrigatório!',
            'password.min' => 'Senha com no mínimo :min caracteres!',
        ];
    }
}
