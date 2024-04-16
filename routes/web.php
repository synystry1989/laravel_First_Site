<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ()
 {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rota dos utilizadores

    // vai pegar em users_index (variavel criada por nos que representa a nossa view criada) e vai a nossa funcao index
    //vai chamar a função index do UserController e nomeia a rota como users.index
    Route::get('users_index', [UserController::class, 'index'])->name('users.index');

    Route::get('users_edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    //atualizar
    Route::put('users_update/{id}', [UserController::class, 'update'])->name('users.update');
    //deletar
    Route::get('users_delete{id}', [UserController::class, 'delete'])->name('users.delete');



//rotas para os socios todos
//rota geral para cada uma das funcoes do controlador socios que foi criada automaticamente

Route::resources([

    // prefixo "socio" para aceder as rotas

    'socio' => SocioController::class]);

Route::get('socios_user/{id}', [SocioController::class,'socios_user'])->name('socio.user');




 });

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
