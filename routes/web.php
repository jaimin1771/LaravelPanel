<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SingInController;

Route::get('/', [HomePageController::class, 'index'])->name('Index');
