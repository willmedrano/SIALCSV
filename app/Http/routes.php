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


Route::resource('prove',"controladorproveedor2");

Route::resource('compra',"contoladorCompra");
Route::match(['get','post'],'/llenadoProducto/{codigopro}','contoladorCompra@llenadoProducto');

Route::resource('escuelas',"ControladorEscuelas@listaescuela");
Route::resource('escuela',"ControladorEscuelas");
Route::resource('ventas',"ventas");
Route::resource('cuotas','ControladorCuotas');
Route::resource('paquete',"ControladorProductoEsc");
Route::resource('paqueteregistro',"ControladorPaqueteEscuela");
Route::match(['get','post'],'/llenadoProductopaquetes/{codigopro}','ControladorContrato@llenadoProductopaquetes');
Route::match(['get','post'],'/preciodelpaquete/{codigopro}','ControladorContrato@preciodelpaquete');
Route::resource('comprapaquete',"ControladorCompraEsc");
Route::resource('aux3',"ControladorauxCont");

Route::resource('contrato',"ControladorContrato");
Route::resource('inve',"inventario");
Route::resource('log',"login");
Route::resource('conf',"loginControlador");
Route::resource('empleado',"Controladorempleado");
Route::resource('permitir',"Controladorpermitir");
Route::resource('negar',"controladorNegar");
Route::resource('pagar',"controladorPagar");

Route::resource('aux2',"auxiliarControl");
Route::resource('lotes',"controladorLotes");
Route::post('subir_imagen_usuario', 'UsuariosController@subir_imagen_usuario');
Route::get('/',"logController@index");
Route::get('logout',"logController@logout");

Route::get('pdf', function() {
$empleados= \App\empleado::All();
	$pdf= PDF::loadView('vistareporte',['empleados'=> $empleados]);
	return $pdf->download('archivo.pdf');
});

Route::get('/pru2', function () {
    return view('empleado.FormEmp');
});
//rutas accessibles slo si el usuario no se ha logueado
Route::group(['middleware' => 'guest'], function () {
Route::get('sesion',  'Auth\AuthController@getLogin');
Route::post('sesion', ['as' =>'sesion', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('admin', 'logController@admin');
});

Route::get('inicio',"logController@MostrarInicio");
Route::get('error', function(){ 
    abort(404);
});

Route::get('500', function(){ 
    abort(500);
});
Route::get('503', function(){ 
    abort(503);
});

