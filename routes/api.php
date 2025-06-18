<?php

use App\Http\Controllers\Api\JamController;
use App\Http\Controllers\Api\LokasiController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\Api\PengajarController;
use App\Http\Controllers\Api\TingkatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/jam',JamController::class);
Route::resource('/lokasi', LokasiController::class);
Route::resource('/mapel', MapelController::class);
Route::resource('/pengajar', PengajarController::class);
Route::resource('/tingkat', TingkatController::class);
