<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rutas API
Route::get('/api', [ApiController::class, 'indexApi'])->name('personajes.api');
Route::post('/store', [ApiController::class, 'store'])->name('personajes.store');
//Rutas propias
Route::get('/', [ApiController::class, 'index'])->name('personajes.index');
Route::get('/{id}', [ApiController::class, 'show'])->name('personajes.show');
Route::get('/{id}/edit', [ApiController::class, 'edit'])->name('personajes.edit');
Route::put('/{id}', [ApiController::class, 'update'])->name('personajes.update');
