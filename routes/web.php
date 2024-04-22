<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EditoraController;



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



//index dos meus socios
Route::get('socios_user/{id}', [SocioController::class,'socios_user'])->name('socio.user');
// rota delete dos meus socios         nome da funcao em socio controler::class
Route::get('socio_delete/{id}', [SocioController::class,'destroySocio'])->name('socio.destroySocio');

Route::get('confirma_delete/{id}', [SocioController::class,'confirma_delete'])->name('socio.confirma_delete');

//rota visualizar editar  geral
Route::get('socio_Show_all/{id}', [SocioController::class,'show_all'])->name('socio.show_all');

Route::get('socio_edit_all/{id}', [SocioController::class, 'edit_all'])->name('socio.edit_all');

Route::put('socio_update_all/{id}', [SocioController::class, 'update_all'])->name('socio.update_all');

//rota confirmar e deletar  scios geral
Route::get('delete_confirmar/{id}', [SocioController::class,'confirma_destroy'])->name('socio.confirma_destroy');

Route::get('socio_destroy/{id}', [SocioController::class,'delete'])->name('socio.delete');



// rotas editoras
Route::get('confirma_destroy/{id}', [EditoraController::class,'confirma_destroy'])->name('editora.confirma_destroy');

Route::get('editora_delete/{id}', [EditoraController::class,'delete'])->name('editora.delete');

Route::resources([

    // prefixo "socio" para aceder as rotas

    'socio' => SocioController::class,

    'editora' => EditoraController::class
]);






 });

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
