<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


route::any('home', [PaginasController::class ,'index'])->name('pagina-inicial');

route::any('/ver-jogos',[PaginasController::class,'show'])->name('pagina-ver');

route::any('/tela-carregamento',[PaginasController::class, 'update'])->name('carregamento');

route::any('/carregamento',[PaginasController::class, 'create'])->name('carregamento2');

route::any('/adicionar-jogo',[PaginasController::class, 'adicionar'])->name('adicionar');

route::any('/erro',[PaginasController::class,'erro'])->name('erro');

route::any('/atualizar',[PaginasController::class,'edit'])->name('atualizar');

route::any('/carregamento3', [PaginasController::class, 'carregamento3'])->name('carregamento3');

route::any('/remover',[PaginasController::class,'destroy'])->name('remover');

route::any('/carregamento4', [PaginasController::class, 'carregamento4'])->name('carregamento4');


route::any('/erro2',[PaginasController::class,'erro2'])->name('erro2');