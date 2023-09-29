<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route:: get('alo', [\App\Http\Controllers\homeController::class, 'index']);

Route:: get('produtos', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route:: get('produto/{id}', [\App\Http\Controllers\ProdutoController::class, 'show']);
Route:: get('produto', [\App\Http\Controllers\ProdutoController::class, 'create'])-> name('produto_create');
Route:: post('produto', [\App\Http\Controllers\ProdutoController::class, 'store']);
Route:: get('produto/{id}/edit', [\App\Http\Controllers\ProdutoController::class, 'edit'])-> name('produto_edit');
Route:: post('produto/{id}/update', [\App\Http\Controllers\ProdutoController::class, 'update'])-> name('produto_update');
Route:: get('produto/{id}/delete', [\App\Http\Controllers\ProdutoController::class, 'delete'])-> name('produto_delete');
Route:: post('produto/{id}/remove', [\App\Http\Controllers\ProdutoController::class, 'remove'])-> name('produto_remove');

Route:: get('atletas', [\App\Http\Controllers\AtletaController::class, 'index']);
Route:: get('atleta/{id}', [\App\Http\Controllers\AtletaController::class, 'show']);
Route:: get('atleta', [\App\Http\Controllers\AtletaController::class, 'create'])-> name('atleta_create');
Route:: post('atleta', [\App\Http\Controllers\AtletaController::class, 'store']);
Route:: get('atleta/{id}/edit', [\App\Http\Controllers\AtletaController::class, 'edit'])-> name('atleta_edit');
Route:: post('atleta/{id}/update', [\App\Http\Controllers\AtletaController::class, 'update'])-> name('atleta_update');
Route:: get('atleta/{id}/delete', [\App\Http\Controllers\AtletaController::class, 'delete'])-> name('atleta_delete');
Route:: post('atleta/{id}/remove', [\App\Http\Controllers\AtletaController::class, 'remove'])-> name('atleta_remove');

Route:: get('exercicios', [\App\Http\Controllers\ExercicioController::class, 'index']);
Route:: get('exercicio/{id}', [\App\Http\Controllers\ExercicioController::class, 'show']);
Route:: get('exercicio', [\App\Http\Controllers\ExercicioController::class, 'create'])-> name('exercicio_create');
Route:: post('exercicio', [\App\Http\Controllers\ExercicioController::class, 'store']);
Route:: get('exercicio/{id}/edit', [\App\Http\Controllers\ExercicioController::class, 'edit'])-> name('exercicio_edit');
Route:: post('exercicio/{id}/update', [\App\Http\Controllers\ExercicioController::class, 'update'])-> name('exercicio_update');
Route:: get('exercicio/{id}/delete', [\App\Http\Controllers\ExercicioController::class, 'delete'])-> name('exercicio_delete');
Route:: post('exercicio/{id}/remove', [\App\Http\Controllers\ExercicioController::class, 'remove'])-> name('exercicio_remove');

Route:: get('treinos', [\App\Http\Controllers\TreinoController::class, 'index']);
Route:: get('treino/{id}', [\App\Http\Controllers\TreinoController::class, 'show']);
Route:: get('treino', [\App\Http\Controllers\TreinoController::class, 'create'])-> name('treino_create');
Route:: post('treino', [\App\Http\Controllers\TreinoController::class, 'store']);
Route:: get('treino/{id}/edit', [\App\Http\Controllers\TreinoController::class, 'edit'])-> name('treino_edit');
Route:: post('treino/{id}/update', [\App\Http\Controllers\TreinoController::class, 'update'])-> name('treino_update');
Route:: get('treino/{id}/delete', [\App\Http\Controllers\TreinoController::class, 'delete'])-> name('treino_delete');
Route:: post('treino/{id}/remove', [\App\Http\Controllers\TreinoController::class, 'remove'])-> name('treino_remove');
