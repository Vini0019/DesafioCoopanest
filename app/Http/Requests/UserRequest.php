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
            'departamento' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'cpf' => [
                'required',
                'string',
                'max:14',
                Rule::unique('users', 'cpf')->ignore($userId),
            ],
            'salario' => 'required|numeric|min:0',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'nome_mae' => 'required|string|max:255',
            'observacoes' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo Nome é obrigatório. Por favor, preencha-o.',
            'name.max' => 'O campo Nome não pode exceder 255 caracteres.',
            'email.required' => 'O campo E-mail é obrigatório. Por favor, preencha-o.',
            'email.email' => 'O campo E-mail deve conter um endereço válido.',
            'email.max' => 'O campo E-mail não pode exceder 255 caracteres.',
            'email.unique' => 'O E-mail informado já está em uso. Por favor, escolha outro.',
            'departamento.required' => 'O campo Departamento é obrigatório. Por favor, preencha-o.',
            'departamento.max' => 'O campo Departamento não pode exceder 255 caracteres.',
            'cargo.required' => 'O campo Cargo é obrigatório. Por favor, preencha-o.',
            'cargo.max' => 'O campo Cargo não pode exceder 255 caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório. Por favor, preencha-o.',
            'cpf.max' => 'O campo CPF não pode exceder 14 caracteres.',
            'cpf.unique' => 'O CPF informado já está em uso. Por favor, escolha outro.',
            'salario.required' => 'O campo Salário é obrigatório. Por favor, preencha-o.',
            'salario.numeric' => 'O campo Salário deve conter apenas números.',
            'salario.min' => 'O campo Salário deve ser no mínimo 0.',
            'telefone.required' => 'O campo Telefone é obrigatório. Por favor, preencha-o.',
            'telefone.max' => 'O campo Telefone não pode exceder 15 caracteres.',
            'endereco.required' => 'O campo Endereço é obrigatório. Por favor, preencha-o.',
            'endereco.max' => 'O campo Endereço não pode exceder 255 caracteres.',
            'nome_mae.required' => 'O campo Nome da Mãe é obrigatório. Por favor, preencha-o.',
            'nome_mae.max' => 'O campo Nome da Mãe não pode exceder 255 caracteres.',
            'observacoes.string' => 'O campo Observações deve conter apenas texto.',
        ];
    }
}
