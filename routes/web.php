<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TablesController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AccountconnectionsController;

Route::get('/', function () {
    return view('index');
});
Route::post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/registrations', [RegistrationController::class, 'index'])->name('registrations.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tables', [TablesController::class, 'index'])->name('tables');
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/accountconnections', [AccountconnectionsController::class, 'index'])->name('accountconnections');
