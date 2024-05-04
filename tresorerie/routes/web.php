<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/enigme1', function () {
    return view('enigme1');
});
Route::get('/enigme2', function () {
    return view('enigme2');
});
Route::get('/enigme3', function () {
    return view('enigme3');
});
Route::get('/enigme4', function () {
    return view('enigme4');
});
Route::get('/enigme5', function () {
    return view('enigme5');
});
Route::get('/enigme6', function () {
    return view('enigme6');
});
Route::get('/enigme7', function () {
    return view('enigme7');
});
Route::get('/enigme8', function () {
    return view('enigme8');
});
Route::get('/fin', function () {
    return view('fin');
});
