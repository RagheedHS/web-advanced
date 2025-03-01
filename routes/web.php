<?php

use App\Http\Controllers\HomeController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;



// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
