<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use Redirect;
use App\usuario;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
class logController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }
    public function index()
    {
       return view('inicio.inicios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function admin(){
      return view('layouts.inicio');  
    }
    public function create()
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(loginRequest $request)
    {
        $emple=usuario::cargarPermitir();
        if(Auth::attempt(['login'=>$request['username'],'password'=>$request['pass']]))
        {
              view('probandos',compact('$emple'));
              
              return view('layouts.inicio');

            //return $request->username;
        }
        Session::flash('menssage-error',"Los datos son Incorectos");
        return view('inicio.inicios');
    }
public function MostrarInicio(){
        return view('layouts.inicio');
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

    public function logout(){
       

          /* $emp=DB::table('empleados')->where('empleados.id', '=', Auth::user()->idUsu)->get();
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");;
     
        $date = Carbon::now();
         $tipo="usuario"; 
         $descrip="Cerrado sesion el".$emp[0]->nomEmp;

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$users[0]->idemp,
            ]);*/
        Auth::logout();
        return view('inicio.inicios');
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
