<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\compras;
use App\detalle_compra;
use App\producto;
use App\coutas;
use App\auxiliar;
use App\lotes;
use App\Http\Requests\RequestProducto;
 use Session;
use DB;
use Auth;
use Carbon\Carbon;
class ControladorProductoEsc extends Controller
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
      $pro= \App\paqueteaux::mostrarpaquetes();
      $prov= \App\proveedor::All();
      $paq= \App\paqueteaux::All(); 
       return view('paquetesescolares.compraesc.mproductosesc', compact('pro','prov','paq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedor =\App\proveedor::All();
      
        return view('paquetesescolares.compraesc.productosesc', compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestProducto $request)
    {
       
        $marca=$request['cod'];
        
        \App\producto::create([
            'cod' => $request['cod'],
            'nomProd' => $request['nomProd'],
            'marca' =>  $marca,
            'uniCaja' => $request['uniCaja'],
            'idProve' => $request['idProve'],
            'gUni' => $request['gUni'],
            'gCaja' => $request['gCaja'],
            'desc' => $request['desc'],
            'cPromedio' => $request['cPromedio'],
        ]);

$emp=DB::table('empleados')->where('empleados.id', '=',Auth::user()->idemp)->get();
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
     
        $date = Carbon::now();
         $tipo="usuario"; 
         $descrip=$emp[0]->nomEmp." ingresó un nuevo paquete";

           \App\bitacora::create([
             'descripcion'=>$descrip,  
             'fecha'=>$date,
             'hora'=>$h,
             'tipo'=>$tipo,
             'idUsu'=>$emp[0]->id,
            ]);
        
        return redirect('paquete/create')->with('message','store');
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
        $productos = \App\producto::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $productos->nomProd = $request['nomProd'];
        $productos->marca = $request['idpaquete'];
        $productos->gUni = $request['gUni'];
        $productos->gCaja = $request['gCaja'];
        $productos->uniCaja = $request['uniCaja'];
        $productos->idProve = $request['idProve'];
        

        $productos->desc = $request['desc'];
        }
        if($aux=='2')
        {
            $productos->estado =true;
        }
        if($aux=='3')
        {
            $productos->estado =false;
        }


        $productos->save();

       // Session::flash('mensaje','¡Registro Actualizado!');
        return redirect('/paquete/');
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
