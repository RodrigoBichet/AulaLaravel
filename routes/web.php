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
