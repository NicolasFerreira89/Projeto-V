<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CavaloController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[HomeController::class,'HomeCavalo'])->name('home');
Route::get('/editar-cavalo',[CavaloController::class,'EditarCavalo'])->name('editar-cavalo');
Route::get('/cadastrar-cavalo',[CavaloController::class,'CadastroCavalo'])->name('cadastrar-cavalo');
Route::post('/cadastrar-cavalo',[CavaloController::class,'SalvarBancoCavalo'])->name('salvar-banco-cavalo');
Route::delete('/editar-cavalo/{registrosCavalos}',[CavaloController::class,'ApagarCavalo'])->name('apagar-cavalo');
Route::get('/alterar-cavalo/{registrosCavalos}',[CavaloController::class,'AlterarCavalo'])->name('alterar-cavalo');
Route::put('/editar-cavalo',[CavaloController::class,'AlterarBancoCavalo'])->name('alterar-banco-cavalo');
    