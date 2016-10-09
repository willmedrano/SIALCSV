<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\empleado;
class login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){// espara realizar un filtro antes 
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->emplead = empleados::find($route->getParameter('log'));// recibe lo que tenemos ya definido en routas 
    }
    /*public function  listaempleados(){
      $emple=\App\empleados::All();
        return response()->json($emple->toArray());
     }*/

public function getempleado(Request $request, $id){
        if($request->ajax()){
            $empleado = empleados::cargarEmpleadoss($id);
            return response()->json($empleado);
        }
    }


    public function index()
    { 
        //referencia al modelo para llenar la tabla
       //$emple=\App\empleados::All();
       //return view('seguridad.modEmpleado',compact('emple'));  //para llenar la tabla de modEmpleado
       // return view('seguridad.permitir');       //par llenar la tabla de permitir
         return view('seguridad.rEmpleado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // return view('seguridad.pago');//pagar al empleado
        //return view('empleado.FormEmp');
         // return view('inicio.recuperar');//recuperar contraseña
        //return view('inicio.logiarse');//cambio de usuario y contraseña
       // return view('inicio.inicios');//para entrar al sistema
        //return view('seguridad.modEmpleado');
     // return view('seguridad.grupos');//grupos de acceso
      // return view('seguridad.permitir');//permitir ingreso al sistema
       //return view('compra.modificarcompra');
       // return view('seguridad.denegar');//denegar acceso al sistema
       //return view('seguridad.rEmpleado');
        //return view('prove.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //empleados::create($request->all());
         \App\empleado::create([
             'fotoEmp'=>$request['dir'],
            'nomEmp'=>$request['nombreE'],
            'apeEmp'=>$request['apeEmp'],
            'NacEmp'=>$request['Fnac'],
            'DUIEmp'=>$request['dui'],
            'NITEmp'=>$request['nit'],
            'dirEmp'=>$request['dir'],
            'telEmp'=>$request['tel1'],
            'sueldoEmp'=>$request['salario'],
            'cargoEmp'=>$request['puesto'],
            'estadoEmp'=>$request['puesto'],
            'sexEmp'=>$request['sexo'],
            'contraEmp'=>$request['Fnac'],

            
            ]);
        return redirect('/log/create')->with('message','store');
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
        //$emple=\App\empleados::find($id);
        return response()->json($this->emplead->toArray());
       // return view('seguridad.permitir',['emple'=>$emple]);

       // return response()->json($empleados->toArray());
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
