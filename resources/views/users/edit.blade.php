<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <a href="{{ route('users.index') }}">Listar</a> <br>
    <a href="{{ route('users.show', ['user' => $user->id]) }}">Visualizar</a>

    <h2>Editar usuário</h2>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}
    <br>
    @endforeach
    @endif

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">

        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $user->telefone) }}">
        <br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{ old('endereco', $user->endereco) }}">
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{ old('cidade', $user->cidade) }}">
        <br><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" value="{{ old('estado', $user->estado) }}">
        <br><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" value="{{ old('cep', $user->cep) }}">
        <br><br>

        <button type="submit">Salvar</button>

    </form>
    
</body>
</html>