<?php

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
// Route::get('/form-success', function () {
//     return view('form-success');
// })->name('form.success');
// Route::post('/submit-form', [FrontendServiceController::class, 'submitForm'])->name('submit.form');
Route::get('/form-success', function () {
    return view('form-success');
})->name('form.success');

Route::post('/submit-form', [FrontendServiceController::class, 'submitForm'])->name('submit.form');
