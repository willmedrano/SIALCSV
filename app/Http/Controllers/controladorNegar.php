<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;
use App\usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Auth;
use Carbon\Carbon;
class controladorNegar extends Controller
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
    {     $emple=empleado::cargarUsuario();
            $ne=usuario::usua();
        //
        return view('seguridad.denegar',compact('emple','ne'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
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
        $trab = empleado::find($id);
        $trab2 = \App\usuario::where('idemp',$id)->get();
       
        $trab3= \App\usuario::find($trab2[0]->id);

        $emp=DB::table('empleados')->where('empleados.id', '=',Auth::user()->idemp)->get();
        $aux=$request['hi2'];
        if($aux=='2')
        {
            $trab->estadoEmp =true;
           $trab3->estadousurio=true;
          //  $trab3->save();
           $descrip=$emp[0]->nomEmp." le dio Acceso a un empleado ";
         

        }
        if($aux=='3')
        {
            $trab->estadoEmp =false;
            $trab3->estadousurio=false;
            $descrip=$emp[0]->nomEmp." le nego el Acceso a un empleado ";
       // $trab3->save();
           
        }
        date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
     
        $date = Carbon::now();
         $tipo="usuario"; 
       

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$emp[0]->id,
            ]);   
        
       // $trab3->estadousurio=false;
        $trab3->save();
        $trab->save();
        return redirect('/negar/');

           
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
        

        $auxeliminar= usuario::find($id);
        $auxeliminar->remember_token="";
        $auxeliminar->password="";
        $auxeliminar->save();
        $auxeliminar= usuario::find($id);
        $auxeliminar->delete();//
        return redirect('/negar');
    }
}
