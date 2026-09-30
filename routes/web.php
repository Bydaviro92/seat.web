<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/modelos', function () {
    return view('modelos');
});

Route::get('/contacto', function () {
    return view('contacto');
});
