<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KijelolesController;
use App\Http\Controllers\MunkasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('munkasok', [MunkasController::class, "index"]);
Route::post('munkasok', [MunkasController::class, "store"]);
Route::put('munkasok/{id}', [MunkasController::class, "update"]);

Route::get('kijelolesek', [KijelolesController::class, "index"]);
Route::post('kijelolesek', [KijelolesController::class, "store"]);
