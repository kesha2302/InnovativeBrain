<?php

use App\Http\Controllers\ClientDetailController;
use App\Http\Controllers\FrontendContactController;
use App\Http\Controllers\FrontendServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/service', [HomeController::class, 'Services']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact2', [HomeController::class, 'contact2']);
// Route::get('/career', [HomeController::class, 'career']);
Route::get('/career', [HomeController::class, 'career']);
Route::get('/clients', [ClientDetailController::class, 'clients']);
Route::post('/clients2', [ClientDetailController::class, 'clients2']);
Route::get('/form.success', function () {
    return view('form.success');
})->name('form.success');

Route::post('/submit-form', [FrontendServiceController::class, 'submitForm'])->name('submit.form');

Route::post('/submit-form', [FrontendContactController::class, 'submitForm'])->name('submit.form');

// Route for the success page

Route::get('/form.success', function () {
    return view('form.success');
})->name('form.success');

