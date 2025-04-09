@extends('users.layouts.app')

@section('title', 'Usuários')
@section('css', 'css/home.css')

@section('content')

    <section class="sessao-intro">
        <div class="circle"></div>
        <header>
            <a href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
        </header>
        <div class="content">
            <div class="text efeito-txt-topo">
                <h2>GESTÃO DE FUNCIONARIOS <br>NA MEDIDA CERTA</h2>
                <p>Cadastre, edite, liste e exclua funcionários com facilidade. Uma solução prática e objetiva para manter sua equipe sempre organizada.</p>
                <div class="btn-lista">
                    <a href="#sessao-lista">CONHEÇA NOSSO GERENCIADOR <img src="images/seta.png"></a>
                </div>
            </div>
        </div>
        <div class="boxImg">
            <img src="images/listar.png" alt="" class="img1 efeito-img-topo-1">
            <img src="images/editar.png" alt="" class="img2 efeito-img-topo-2">
            <img src="images/adicionar.png" alt="" class="img3 efeito-img-topo-3">
        </div>
    </section>

    <section class="sessao-lista" id="sessao-lista">


        <div class="container-tabela">

            <div class="titulo-lista efeito-txt-topo">
                <h1>FUNCIONARIOS</h1>
            </div>

            <div class="container-pesquisa-funcionario">

                <div class="icon-pesquisa-funcionario">
                    <form method="GET" action="{{ route('users.index') }}" class="form-pesquisa-funcionario">
                        <input type="text" name="search" id="pesquisa-funcionario" placeholder="Pesquise um funcionário" value="{{ request('search') }}">
                        <button type="submit" class="btn-pesquisa">
                            <img src="icons/pesquisa-icon.png">
                        </button>
                    </form>
                </div>

                <a class="novo-funcionario" id="btn-novo-funcionario" href="{{ route('users.create') }}">
                    Cadastrar
                </a>
            </div>

            <div class="container-informacoes-tabela">

                <table class="tabela-funcionarios">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Departamento</th>
                            <th>Cargo</th>
                            <th>Salário</th>
                            <th>Telefone</th>
                            <th>Observações</th>
                            <th>Detalhes</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isEmpty())
                        <tr>
                            <td colspan="11" style="text-align: center;">Nenhum funcionario encontrado.</td>
                        </tr>
                        @else
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->departamento }}</td>
                            <td>{{ $user->cargo }}</td>
                            <td>{{ $user->salario }}</td>
                            <td>{{ $user->telefone }}</td>
                            <td>{{ $user->observacoes }}</td>
                            <td class='icon icon-exibir'>
                                <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                    <img src="icons/detalhes.png" alt="">
                                </a>
                            </td>
                            <td class='icon icon-editar'>
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    <img src="icons/editar.png" alt="">
                                </a>
                            </td>
                            <td class='icon icon-deletar'>
                                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" class="form-delete" data-id="{{ $user->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-delete" data-id="{{ $user->id }}">
                                        <img src="icons/excluir.png" alt="">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

