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


Route::get('/pru', function () {
    return view('inventario.formIntv');
});

Route::get('/prueba', function () {
    return view('prueba');
});


Route::get('probados', function () {
    return view('probandos');
});
Route::get('/form1','ControladorMultiformularios@formulario1Muestra');
Route::get('/form11','ControladorMultiformularios@formulario1Muestra2');

Route::get('/form2','ControladorMultiformularios@formulario2Muestra');
Route::get('/form22','ControladorMultiformularios@formulario2Muestra2');

Route::get('/form3','ControladorMultiformularios@formulario3Muestra');
Route::get('/form33','ControladorMultiformularios@formulario3Muestra3');

Route::get('/form4','ControladorMultiformularios@formulario4Muestra');
Route::get('/form44','ControladorMultiformularios@formulario4Muestra4');

Route::resource('prove',"controladorproveedor2");

Route::resource('compra',"contoladorCompra");
Route::match(['get','post'],'/llenadoProducto/{codigopro}','contoladorCompra@llenadoProducto');

Route::resource('escuelas',"ControladorEscuelas@listaescuela");
Route::resource('escuela',"ControladorEscuelas");

Route::resource('contrato',"ControladorContrato");

Route::resource('contrato',"ControladorContrato");
Route::resource('inve',"inventario");
Route::resource('log',"login");
Route::resource('empleado',"Controladorempleado");
Route::resource('permitir',"Controladorpermitir");
Route::resource('negar',"controladorNegar");
Route::resource('aux2',"auxiliarControl");
Route::resource('lotes',"controladorLotes");


Route::get('/pru2', function () {
    return view('empleado.FormEmp');
});
