<?php

use Illuminate\Http\Request;
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

Route::post('/formstore', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|active_url',
        'phoneNumber' => 'required',
    ],[
        'name.required' => 'Sila masukkan nama anda',
        'email.required' => 'Sila masukkan email anda',
        'email.active_url' => 'Sila masukkan email yang wujud',
        'email.email' => 'Sila masukkan email yang betul',
        'phoneNumber.required' => 'Sila masukkan nombor telefon anda',
    ]);
})->name('form.store');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/quotations', function () {
    return view('quotations');
});

Route::get('/sweetalert', function () {
    return view('sweetalert');
})->name('sweetalert');

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/responsiveLayout', function () {
    return view('responsiveLayout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
