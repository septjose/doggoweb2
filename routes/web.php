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
    return view('index');
});


Route::get('/doggo_acerca_de', function () {
    return view('principal.about');
});

Route::get('/doggo_contacto', function () {
    return view('principal.contacto');
});

Route::get('/doggo_menu', function () {
    return view('principal.snacks');
});

Route::get('/doggo_placa', function () {
    return view('principal.placa');
});

Route::get('/doggo_puntos_venta', function () {
    return view('principal.puntos_venta');
});

Route::get('/doggo_amigos', function () {
    return view('principal.gallery');
});
