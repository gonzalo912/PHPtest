<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', [LogInController::class, 'index']);

Route::get('/clients', [ClientController::class,'index']);

Route::post('/clients/create', [ClientController::class,'create']);

Route::post('/clients/edit', [ClientController::class,'update']);

// Route to show the registration form
Route::get('/register', [UserController::class, 'index']);

// Route to handle form submission
Route::post('/register', [UserController::class, 'store'])->name('register');
