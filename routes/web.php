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
use App\Http\Controllers\Admin\TrackerController;
use App\Http\Controllers\Admin\TrackingController;

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
Route::get('/tracker', [TrackerController::class,'index'])->name('tracker');

Route::get('/registrations', [RegistrationController::class, 'index'])->name('registrations.index');
Route::get('/registrations/{id}/edit', [RegistrationController::class, 'edit'])->name('registrations.edit');
// web.php
Route::put('/registrations/{id}', [RegistrationController::class, 'update'])->name('registrations.update');

Route::post('/registrations', [RegistrationController::class, 'store'])->name('registrations.store');
// web.php
Route::resource('registrations', RegistrationController::class);
Route::put('registrations/{registration}/update', 'RegistrationController@update')->name('registrations.update');
Route::put('/registrations/update/{id}', [RegistrationController::class, 'update'])->name('registrations.update');
Route::get('/registration/status/{tracking_number}', [RegistrationController::class, 'showStatus'])->name('registration.status');

// Afficher le formulaire de recherche
Route::get('/tracker', [TrackerController::class, 'showSearchForm'])->name('tracker.search');

// Traiter la soumission du formulaire
Route::post('/tracker/search', [TrackerController::class, 'search'])->name('tracker.search.submit');
