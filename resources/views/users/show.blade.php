<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/show.css">
    <title>Detalhes</title>
</head>

<body>
    <div class="container">
        <div class="link-voltars">
            <a href="{{ route('users.index') }}" class="link-voltar">← Voltar para lista</a>
            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="link-voltar">Editar usuário</a>
        </div>

        <h2>Detalhes do Usuário</h2>

        <div class="user-id">ID: {{ $user->id }}</div>

        <div class="grupo-detalhes">
            <span class="detail-label">Nome completo</span>
            <span class="detail-value">{{ $user->name }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">E-mail</span>
            <span class="detail-value">{{ $user->email }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Departamento</span>
            <span class="detail-value">{{ $user->departamento ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Cargo</span>
            <span class="detail-value">{{ $user->cargo ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">CPF</span>
            <span class="detail-value">{{ $user->cpf ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Salário</span>
            <span class="detail-value">{{ $user->salario ? 'R$ ' . number_format($user->salario, 2, ',', '.') : 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Telefone</span>
            <span class="detail-value">{{ $user->telefone ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Endereço</span>
            <span class="detail-value">{{ $user->endereco ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Nome da Mãe</span>
            <span class="detail-value">{{ $user->nome_mae ?? 'Não informado' }}</span>
        </div>

        <div class="grupo-detalhes">
            <span class="detail-label">Observações</span>
            <span class="detail-value textarea">{{ $user->observacoes ?? 'Nenhuma observação cadastrada' }}</span>
        </div>
    </div>
</body>

</html>