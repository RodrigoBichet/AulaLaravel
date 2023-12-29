<?php

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

//Atletas
Route::get('/atleta', [\App\Http\Controllers\Api\AtletaController::class, 'index']);
Route::get('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class,'show']);
Route::post('/atleta', [\App\Http\Controllers\Api\AtletaController::class, 'store']);
Route::put ('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class, 'update']);
Route::delete('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class, 'remove']);

//Exercicios
Route::get('/exercicio', [\App\Http\Controllers\Api\ExercicioController::class, 'index']);
Route::get('/exercicio/{id}', [\App\Http\Controllers\Api\ExercicioController::class,'show']);
Route::post('/exercicio', [\App\Http\Controllers\Api\ExercicioController::class, 'store']);
Route::put ('/exercicio/{id}', [\App\Http\Controllers\Api\ExercicioController::class, 'update']);
Route::delete('/exercicio/{id}', [\App\Http\Controllers\Api\ExercicioController::class, 'remove']);

//Treinos com API
//Route::get('/treino', [\App\Http\Controllers\Api\TreinoController::class, 'index']);
Route::get('/treino/{id}', [\App\Http\Controllers\Api\TreinoController::class,'show']);
//Route::post('/treino', [\App\Http\Controllers\Api\TreinoController::class, 'store']);
//Route::put ('/treino/{id}', [\App\Http\Controllers\Api\TreinoController::class, 'update']);
//Route::delete('/treino/{id}', [\App\Http\Controllers\Api\TreinoController::class, 'remove']);

//Treinos com ApiResource
Route::apiResource('treino', \App\Http\Controllers\Api\TreinoController::class);

//Rota para endpoint aninhado Exercicio e Treino
Route::get('treino/{treino}/exercicios', [\App\Http\Controllers\Api\TreinoController::class, 'exercicios'])->name('treino.exercicios');

//Route::get('treino/{treino}/exercicios', [\App\Http\Controllers\Api\TreinoController::class, 'exercicios'])->name('treino.exercicios');
