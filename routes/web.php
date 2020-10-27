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
})->name('index');

Route::get('/Medios de comunicación interpersonal',function(){
    return view('Medios de comunicación interpersonal');
})->name('Medios de comunicación interpersonal');

Route::get('/Estructura según su carácter',function(){
    return view('Estructura según su carácter');
})->name('Estructura según su carácter');

route ::get('/Los medios de comunicación más utilizados', function (){
    return view('Los medios de comunicación más utilizados');
})->name('Los medios de comunicación más utilizados');