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
Route::match(['get','post'],'/llenadoProducto2/{codigopro}','ventas@llenadoProducto2');
Route::match(['get','post'],'/llenadoProducto3/{codigopro}','ControladorCompraEsc@llenadoProducto3');
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
Route::resource('aux4',"auxiliarControl2");
Route::resource('aux5',"auxiliarControl3");
Route::resource('aux6',"auxiliarControl1");
Route::resource('lotes',"controladorLotes");
Route::post('subir_imagen_usuario', 'UsuariosController@subir_imagen_usuario');
Route::resource('/',"logController");

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

//Lo que le agregue estas rutas 
Route::match(['get','post'],'/VerificarEPCaja/{codigopro}','ventas@VerificarEPCaja');
Route::match(['get','post'],'/VerificarEPUnidades/{codigopro}','ventas@VerificarEPUnidades');
Route::resource('notificaciones',"ContraladorNotificaciones");
Route::get('logout',"logController@logout");//ruta para salir del sistema

/////////////////////////////////////ruta cambio de usuario y contraseña
Route::resource('cambiousuario','controladorCambiousuario');


Route::get('reporte2','PDFcontroller@reporteDCompras');
Route::get('reporte3','PDFcontroller@reporteDVentas');
Route::get('reporte4','PDFcontroller@reporteDInventarios');
Route::get('reporte5','PDFcontroller@reporteDPagos');



////////////////////////////////////ruta segunda prueba reportes///////////////////////





Route::get('reporte','PDFcontroller@index');
Route::resource('reporte','PDFcontroller');
Route::get('crear_reporte_porpais/{tipo}/{fecha}','PDFcontroller@crear_reporte_porpais');


//////////////////////////////////////rutas prueba email///////////////////////////////
Route::resource('mail','Mailcontroller');
Route::get('recuperarContra','controladorRecuperar@index');