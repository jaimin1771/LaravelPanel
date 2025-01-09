<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomePageController::class, 'index'])->name('Index');
Route::get('/signin', [SingInController::class, 'index'])->name('signin');
Route::post('/create', [SingInController::class, 'store'])->name('create');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
