<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/grid', function () {
    return view('grid');
})->name('grid');

Route::get('/flex', function () {
    return view('flex');
})->name('flex');

Route::get('/table', function () {
    return view('table');
})->name('table');

Route::get('/form', function () {
    return view('form');
})->name('form');

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
