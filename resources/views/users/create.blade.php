<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <title>Criando usuários</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('users.index') }}" class="back-link">← Voltar para lista de usuários</a>


        <h2>Cadastrar usuário</h2>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        {{ $error }}
        <br>
        @endforeach
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Digite o nome completo" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Digite o e-mail válido" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento" id="departamento" value="{{ old('departamento') }}" placeholder="Informe o departamento" required>
            </div>

            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo" value="{{ old('cargo') }}" placeholder="Informe o cargo" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="000.000.000-00" required>
            </div>

            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="text" name="salario" id="salario" value="{{ old('salario') }}" placeholder="R$ 0,00" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="(00) 00000-0000" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" placeholder="Informe o endereço completo" required>
            </div>

            <div class="form-group">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" id="nome_mae" value="{{ old('nome_mae') }}" placeholder="Informe o nome da mãe" required>
            </div>

            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea name="observacoes" id="observacoes" placeholder="Adicione observações relevantes">{{ old('observacoes') }}</textarea>
            </div>

            <button type="submit" class="btn">Cadastrar</button>

        </form>
    </div>

</body>

</html>