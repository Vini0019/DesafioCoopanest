@extends('users.layouts.app')

@section('title', 'Editar Usuário')
@section('css', '/css/edit.css')

@section('content')

    <div class="container">
        <div class="action-links">
            <a href="{{ route('users.index') }}" class="action-link">← Listar Usuários</a>
            <a href="{{ route('users.show', ['user' => $user->id]) }}" class="action-link"> Visualizar</a>
        </div>

        <h2>Editar Usuário</h2>

        @if ($errors->any())
        <div class="error-message">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" placeholder="Digite o nome completo" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" placeholder="Digite o e-mail válido" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento" id="departamento" value="{{ old('departamento', $user->departamento) }}" placeholder="Informe o departamento" required>
            </div>

            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo" value="{{ old('cargo', $user->cargo) }}" placeholder="Informe o cargo" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $user->cpf) }}" placeholder="000.000.000-00" required>
            </div>

            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="text" name="salario" id="salario" value="{{ old('salario', $user->salario) }}" placeholder="R$ 0,00" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $user->telefone) }}" placeholder="(00) 00000-0000" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" value="{{ old('endereco', $user->endereco) }}" placeholder="Informe o endereço completo" required>
            </div>

            <div class="form-group">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" id="nome_mae" value="{{ old('nome_mae', $user->nome_mae) }}" placeholder="Informe o nome da mãe" required>
            </div>

            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea name="observacoes" id="observacoes" placeholder="Adicione observações relevantes">{{ old('observacoes', $user->observacoes) }}</textarea>
            </div>

            <button type="submit" class="btn">Salvar Alterações</button>
        </form>
    </div>

@endsection