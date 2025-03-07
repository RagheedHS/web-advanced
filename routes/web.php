<?php  

use App\Http\Controllers\AdminController;  
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\UserController;  
use App\Http\Controllers\Auth\LoginController; // Import LoginController  
use App\Http\Controllers\Auth\RegisterController; // Import RegisterController  
use App\Http\Controllers\Auth\ForgotPasswordController; // Import ForgotPasswordController  
use App\Http\Controllers\Auth\ResetPasswordController; // Import ResetPasswordController  
use App\Http\Middleware\AuthAdmin;  
use Illuminate\Support\Facades\Route;  

// Remove this line:  
// use Illuminate\Container\Attributes\Auth;  

// Remove this line. This method is not available in newer Laravel versions.  
// Auth::routes();  

// Manually define authentication routes:  
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');  
Route::post('/login', [LoginController::class, 'login']);  
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');  

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');  
Route::post('/register', [RegisterController::class, 'register']);  

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');  
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');  
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');  
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');  


Route::get('/', [HomeController::class, 'index'])->name('home.index');  


Route::middleware(['auth'])->group(function () {  
    Route::get('/user-dashboard', [UserController::class, 'index'])->name('user.index');  
});  

Route::middleware(['auth', 'AuthAdmin'])->group(function () {  
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');  
});  