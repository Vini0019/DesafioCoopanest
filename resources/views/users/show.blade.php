<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
</head>

<body>

    <a href="{{ route('users.index') }}">Listar</a> <br>
    <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a>


    <h2>Visualizar usuário</h2>

    <label for="id">ID:</label>
    <input type="text" name="id" id="id" value="{{ $user->id }}" readonly>
    <br><br>

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" readonly>
    <br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" readonly>
    <br><br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="{{ $user->telefone ?? '' }}" readonly>
    <br><br>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" value="{{ $user->endereco ?? '' }}" readonly>
    <br><br>

    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" id="cidade" value="{{ $user->cidade ?? '' }}" readonly>
    <br><br>

    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado" value="{{ $user->estado ?? '' }}" readonly>
    <br><br>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" id="cep" value="{{ $user->cep ?? '' }}" readonly>
    <br><br>



</body>

</html>