<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\empleado;
use App\usuario;//esto agregado chepe jonathan
use Session;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Controladorpermitir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    $emple=usuario::cargarPermitir();
     
      //$emp=\App\empleado::sEmp();
       //return view('seguridad.modEmpleado',compact('emple'));  //para llenar la tabla de modEmpleado
     return view('seguridad.permitir',compact('emple'));       //par llenar la tabla de permitir
      //return view('seguridad.denegar',compact('emple')); 
       // return view('inicio.inicios'); 

        //return view('inicio.logiarse'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aux=$request['hi2'];
          //esto agregado chepe jonathan
usuario::create([
            'login'=>$request['login'],
            'password'=>bcrypt($request['pass']),
            'correoEmp'=>$request['correoEmp'],
            'imag'=>$request['imagen'],
              'auxiliar'=>$request['pass'],
            'idemp'=>$aux,
            

            ]);

\App\user::create([
            'name'=>$request['login'],
            'email'=>$request['correoEmp'],
            'password'=>bcrypt($request['pass']),
            

            ]);

$emp=DB::table('empleados')->where('empleados.id', '=',Auth::user()->idemp)->get();
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
     
        $date = Carbon::now();
         $tipo="usuario"; 
         $descrip=$emp[0]->nomEmp." concedió permiso a un Empleado";

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$emp[0]->id,
            ]);

            return redirect('/permitir/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
