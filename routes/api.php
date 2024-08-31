<?php
use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::any('/ver', [CrudController::class,'show'])->name('ver');

route::post('/ver-atualizar', [CrudController::class, 'atualizar'])->name('atualizar-ver');

route::post('/adicionando',[CrudController::class,'create'])->name('adicionar-jogos');

route::post('/remover',[CrudController::class,'destroy'])->name('deletar');