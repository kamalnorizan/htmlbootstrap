<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quotations', function () {
    return view('quotations');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/responsiveLayout', function () {
    return view('responsiveLayout');
});
