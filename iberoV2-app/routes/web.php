<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

Route::view('/', 'welcome');


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
    return view('posts.crear');
})->name('Crear');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/', [PostController::class, 'store']);