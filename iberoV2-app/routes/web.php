<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Metodologico', function () {
    return view('Metodologico');
})->name('Metodologico');

Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');

Route::get('/formulacion', function () {
    return view('formulacion.formulacion');
})->name('formulacion');

Route::get('/crear', function () {
    return view('formulacion.crear');
})->name('Crear');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');