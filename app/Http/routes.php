<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/json', function () {
    return view('json');
});


