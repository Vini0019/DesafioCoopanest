<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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

        $userId = $this->route('user');

        return [
            'name' => 'required|string|max:255',
            'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => 'required|string|min:8',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:50',
            'cep' => 'required|string|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome não pode ter mais que 255 caracteres',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email deve ser um endereço de email válido',
            'email.max' => 'O email não pode ter mais que 255 caracteres',
            'email.unique' => 'O email deve ser único',
            'password.required' => 'A senha é obrigatória',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres',
            'telefone.required' => 'O telefone é obrigatório',
            'telefone.max' => 'O telefone não pode ter mais que 15 caracteres',
            'endereco.required' => 'O endereço é obrigatório',
            'endereco.max' => 'O endereço não pode ter mais que 255 caracteres',
            'cidade.required' => 'A cidade é obrigatória',
            'cidade.max' => 'A cidade não pode ter mais que 100 caracteres',
            'estado.required' => 'O estado é obrigatório',
            'estado.max' => 'O estado não pode ter mais que 50 caracteres',
            'cep.required' => 'O CEP é obrigatório',
            'cep.max' => 'O CEP não pode ter mais que 10 caracteres',
        ];
    }
}
