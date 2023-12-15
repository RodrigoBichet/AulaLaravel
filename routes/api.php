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


Route::get('/atleta', [\App\Http\Controllers\Api\AtletaController::class, 'index']);
Route::get('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class,'show']);

Route::post('/atleta', [\App\Http\Controllers\Api\AtletaController::class, 'store']);

Route::put ('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class, 'update']);

Route::delete('/atleta/{id}', [\App\Http\Controllers\Api\AtletaController::class, 'remove']);
