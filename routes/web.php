<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hussein', function () {
    return view('pages.hussein');
});

Route::get('/mustafa', function () {
    return view('pages.mustafa');
});
