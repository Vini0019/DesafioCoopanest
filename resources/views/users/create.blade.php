<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando usuários</title>
</head>

<body>
    <a href="{{ route('users.index') }}">Cadastrar</a>

    <h2>Cadastrar usuário</h2>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}
    <br>
    @endforeach
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">
        <br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}">
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{ old('cidade') }}">
        <br><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" value="{{ old('estado') }}">
        <br><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" value="{{ old('cep') }}">
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>