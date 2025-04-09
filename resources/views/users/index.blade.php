<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>

<body>

    <a href="{{ route('users.create') }}">Cadastrar</a>

    <h2>Listar usuários</h2>

    @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Ações</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->telefone }}</td>
            <td>{{ $user->endereco }}</td>
            <td>{{ $user->cidade }}</td>
            <td>{{ $user->estado }}</td>
            <td>{{ $user->cep }}</td>
            <td><a href="{{ route('users.show', ['user' => $user->id]) }}">Listar</a></td>
            <td><a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a></td>
            <td>
                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Você realmente deseja excluir?')">Deletar</button>
                </form>
            </td>

            </form>
        </tr>
        @endforeach
    </table>

</body>

</html>