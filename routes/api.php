<?php

use App\Http\Controllers\Api\JamController;
use App\Http\Controllers\Api\LokasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/jam',JamController::class);
Route::resource('/lokasi', LokasiController::class);