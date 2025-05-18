<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'landing'])->name('landing');
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');