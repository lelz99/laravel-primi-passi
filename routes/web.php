<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $greeting = 'Hello World';


    return view('home', compact('greeting'));
});

Route::get('/class', function () {

    $greeting = 'Ciao Classe 116';

    return view('class/class', compact('greeting'));
});

