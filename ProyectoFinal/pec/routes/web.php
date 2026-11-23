<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/acercade', function () {
    return view('acercade');
})->name('acercade');

Route::get('/contenido', function () {
    return view('contenido');
})->name('contenido');