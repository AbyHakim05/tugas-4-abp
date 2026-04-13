<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Tugas 4 Routes
Route::get('/lat1', [Lat1Controller::class, 'index']);
Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);

// Tugas 5 Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/home', [AuthController::class, 'home']);
Route::get('/logout', [AuthController::class, 'logout']);
