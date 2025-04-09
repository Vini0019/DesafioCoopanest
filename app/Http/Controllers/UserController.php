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

        $user = User::orderBy('id')->get();


        return view(('users.index'), [
            'users' => $user,
            'search' => $request->search,
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
            'password' => bcrypt($request->password),
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
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
            'password' => bcrypt($request->password),
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
        ]);


        return redirect()->route('users.show', ['user' => $user->id])->with('success', 'Usuário criado com sucesso!');
    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
