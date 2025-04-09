<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'departamento' => 'Financeiro',
            'cargo' => 'Analista',
            'cpf' => '123.456.789-00',
            'salario' => '5000.00',
            'telefone' => '(11) 98765-4321',
            'endereco' => 'Rua Exemplo, 123, Bairro Teste, Cidade Exemplo',
            'nome_mae' => 'Maria Teste',
            'observacoes' => 'Funcionário em período de experiência',
        ]);
    }
}
