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
    


    public function index()
    { 
        //referencia al modelo para llenar la tabla
       $emple=\App\empleado::All();
      //$emp=\App\empleado::sEmp();
       return view('seguridad.modEmpleado',compact('emple'));  //para llenar la tabla de modEmpleado
       //return view('seguridad.permitir',compact('emple'));       //par llenar la tabla de permitir
         //return view('seguridad.rEmpleado');
        //return view('seguridad.pago',compact('emple'));//llenar la tabla pago
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
       return view('seguridad.rEmpleado');
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
            //'estadoEmp'=>$request['puesto'],
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
        $emple=\App\empleados::find($id);
        //return response()->json($this->emplead->toArray());
       // return view('seguridad.permitir',['emple'=>$emple]);
          return view('seguridad.modEmpleado',['emple'=>$emple]);
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
        $trab = empleado::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $trab->nomEmp = $request['nomEmp'];
        $trab->apeEmp = $request['apeEmp'];
       $trab->DUIEmp = $request['DUI'];
       $trab->NITEmp = $request['NIT'];
        $trab->NacEmp = $request['Fnac'];
        $trab->dirEmp = $request['dir'];
        $trab->telEmp = $request['telEmp'];
        $trab->sueldoEmp = $request['salario'];
        $trab->cargoEmp = $request['cargo'];
        $trab->sexEmp = $request['sexo'];
        //$trab->contraEmp = $request['desc'];
        }


         


        if($aux=='2')
        {
            $trab->estadoEmp =true;
        }
        if($aux=='3')
        {
            $trab->estadoEmp =false;
        }


        $trab->save();
    return redirect('/log/');
        //Session::flash('mensaje','¡Registro Actualizado!');
       // return redirect::to('/log/create');
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
