<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/', function () {
    return view('accueil');
})->name('entree-sortie');