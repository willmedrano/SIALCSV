<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EscuelaRequest;
use App\Http\Controllers\Controller;
use Redirect;
use App\Escuelas;
use Session;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\Route;//importar las routas que necesito para utilizar

class ControladorEscuelas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
         $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
     

    public function find(Route $route){
        $this->escuela = Escuelas::find($route->getParameter('escuela'));// recibe lo que tenemos ya definido en routas 
    }
     public function  listaescuela(){

        $escuelas= Escuelas::all();
        return response()->json($escuelas->toArray());
     }
    public function index()
    {
        
          $escuelas= Escuelas::all();
            return view('paquetesescolares.escuela.index',compact('escuelas'));
           //return view('); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('paquetesescolares.escuela.registroescuela');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscuelaRequest $request)
    {
        
      
        Escuelas::create([
            'nomesc'=>$request['nomesc'],
            'nomdirec'=>$request['nomdirec'],
            'telesc'=>$request['telesc'],
            'diresc'=>$request['diresc'],

            ]);

        $emp=DB::table('empleados')->where('empleados.id', '=',Auth::user()->idemp)->get();
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
     
        $date = Carbon::now();
         $tipo="usuario"; 
         $descrip=$emp[0]->nomEmp." Ingreso una Escuela";

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$emp[0]->id,
            ]);

        
        return redirect('/escuela/create')->with('message','store');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $escuela2=Escuelas::mostrarEscuela();
        //$pro2 =\App\producto::mostrar($id);
        return view('escuela.index',compact('$escuela2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /*$escuelaM= Escuelas::find($id);
        
      Session::flash('message', 'Edit');
      return view('paquetesescolares.escuela.edit', ['escuelaM'=>$escuelaM]);*/
      //$escuelas = Escuelas::find($id);
       // return response()->json($this->escuela->toArray());
        // return view('paquetesescolares.escuela.index', ['escuelaM'=>$escuelaM]);

       $escuela2=Escuelas::find($id);
        return view('escuela.index',compact('$escuela2'));
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
       /* $escuelaM = Escuelas::find($id);
        $escuelaM->fill($request->all());
        $escuelaM->save();
        Session::flash('message', 'Escuela Editado correctamente');
        return redirect('/escuela');*/

        //$escuelas = Escuelas::find($id);
      /* $this->escuela->fill($request->all());
       $this->escuela->save();
        return response()->json(["mensaje" => "listo"]);*/
         $escuelaM = Escuelas::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $escuelaM->nomesc = $request['nomesc'];
        $escuelaM->nomdirec = $request['nomdirec'];
        $escuelaM->telesc = $request['telesc'];
        $escuelaM->diresc = $request['diresc'];
       
        }
        


        $escuelaM->save();
        $emp=DB::table('empleados')->where('empleados.id', '=',Auth::user()->idemp)->get();
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
     
        $date = Carbon::now();
         $tipo="usuario"; 
         $descrip=$emp[0]->nomEmp." Modifico una Escuela";

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$emp[0]->id,
            ]);



    
        return redirect::to('/escuela')->with('message','update');;
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
