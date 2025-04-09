<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('departamento', 'like', '%' . $search . '%')
                ->orWhere('cargo', 'like', '%' . $search . '%');
        })->orderBy('id')->get();

        return view('users.index', [
            'users' => $users,
            'search' => $search
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function create()
    {

        return view('users.create');
    }

    public function store(UserRequest $request)
    {

        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'departamento' => $request->departamento,
            'cargo' => $request->cargo,
            'cpf' => $request->cpf,
            'salario' => $request->salario,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'nome_mae' => $request->nome_mae,
            'observacoes' => $request->observacoes,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(User $user)
    {

        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function update(UserRequest $request, User $user)
    {

        $request->validated();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'departamento' => $request->departamento,
            'cargo' => $request->cargo,
            'cpf' => $request->cpf,
            'salario' => $request->salario,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'nome_mae' => $request->nome_mae,
            'observacoes' => $request->observacoes,
        ]);


        return redirect()->route('users.show', ['user' => $user->id])->with('success', 'Usuário criado com sucesso!');
    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
