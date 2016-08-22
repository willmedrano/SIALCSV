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
    return view('welcome');
});



Route::get('prueba', 'PruebaControler@index');


Route::get('/prueba2', function () {
    return view('prueba2');
});

Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('probados', function () {
    return view('probandos');
});

Route::resource('prove',"controladorproveedor2");
