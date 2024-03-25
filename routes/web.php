<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LogInController::class, 'index']);
Route::post('/', [LogInController::class, 'store'])->name('login');
Route::get('/register', function() {
    return view('register');
});
Route::post('/register', [UserController::class, 'store'])->name('register');

Route::middleware('auth')->group(function(){
    Route::get('/panel', function(){
        return view('panel-layout');
    });
    Route::get('/panel/users', [UserController::class,'index']);
    Route::get('/panel/clients', [ClientController::class,'index'])->name('clients');
    Route::post('panel/clients/create', [ClientController::class,'create']);
    Route::get('panel/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('panel/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('panel/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
});
