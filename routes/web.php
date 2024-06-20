<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quotations', function () {
    return view('quotations');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/responsiveLayout', function () {
    return view('responsiveLayout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
