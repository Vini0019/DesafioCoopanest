<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/* Rota inicial com introdução e listagem */
Route::get('/', [UserController::class, 'index']);
Route::get('/dados', [UserController::class, 'index'])->name('users.index');

/* Rota feita para mostrar mais detalhes */
Route::get('detalhes/{user}', [UserController::class, 'show'])->name('users.show');

/* Rota que vai para o formulário de cadastro */
Route::get('/cadastro', [UserController::class, 'create'])->name('users.create');

/* Rota que recebe os dados de cadastro */
Route::post('/dados', [UserController::class, 'store'])->name('users.store');

/* Rota que vai para o formulário de edição */
Route::get('/dados/{user}', [UserController::class, 'edit'])->name('users.edit');

/* Rota que recebe os dados de edição */
Route::put('update-user/{user}', [UserController::class, 'update'])->name('users.update');

/* Rota para deletar o usuário */
Route::delete('destroy-user/{user}', [UserController::class, 'destroy'])->name('users.destroy');
