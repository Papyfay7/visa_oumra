<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('index');
});





Route::post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
