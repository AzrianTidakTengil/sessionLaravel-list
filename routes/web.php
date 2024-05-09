<?php

use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [sessionController::class, 'index']);
Route::get('/buat-session', [SessionController::class, 'buatSession']);
Route::get('/akses-session', [SessionController::class, 'aksesSession']);
Route::get('/hapus-session', [SessionController::class, 'hapusSession']);
Route::get('/flash-session', [SessionController::class, 'flashSession']);
