<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\auxiliar2ventas;
use App\auxiliar3ventas;
use Carbon\Carbon;
use Auth;
use Session;
class auxiliarControl3 extends Controller
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
        //
       $comp= \App\facturacion::emp();
        return view('ventas.detalledeventa',compact('comp'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $comp= \App\pyg::All();
        return view('pyg.tablapyg',compact('comp'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       \App\facturacion::create([
             
            'fechaf' => $request['fecha'],
            'total' => $request['total'],
            'nomcli' => $request['cli'],
            'iva_credito' => $request['iva'],
            'detalle' => $request['des'],
            'idempl' => $request['codE'],
        ]);
        $ids;
        $gAux =\App\facturacion::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\auxiliar3ventas::All();

        foreach ($gAux as $valor) 
        {
            $cal = \App\producto::find($valor->idprods3);
            \App\ventasp::create([
                //'' => $valor->preciocomp3,
                'preciov' => $valor->descompra3,
                'cantidadv' => (($valor->cancompra3*$cal->uniCaja)+$valor->preciocomp3),
                'idProd' => $valor->idprods3,
                'idFact' => $ids,

            ]);
                        
            
    }
       
        
        



  $eAux =\App\auxiliar3ventas::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\auxiliar3ventas::find( $v->id );
                  $auxeliminar->delete();               
        }


       
       
        return redirect('reporte9');

                               
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
        $id= Auth::user()->idemp;
       $gAux =\App\auxiliar2ventas::auxComp2($id);
$cal=0;
        foreach ($gAux as $valor) 
        {
            $cal = $cal+$valor->descompra3; // descompra 3 total de venta al mennudeo
            \App\auxiliar3ventas::create([
                //'' => $valor->preciocomp3,

                'preciocomp3' => $valor->preciocomp3,
                'descompra3' => $valor->descompra3,
                'cancompra3' => $valor->cancompra3,
                'idprods3' => $valor->idprods3,  
                

            ]);
                        
            
    }
    date_default_timezone_set("America/El_Salvador");
        $date = Carbon::now();
    \App\pyg::create([
                'ingreso' => $cal,
                'egreso' => 0,
                'fecha' => $date,
                'detalle' => "Por venta de Productos",
            
        ]);
       
        
        



  $eAux =\App\auxiliar2ventas::auxComp2($id);
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\auxiliar2ventas::find( $v->id );
                  $auxeliminar->delete();               
        }
        //return redirect('ventas/create')->with('message')
        $limpiar=\App\lotes::All();
        foreach ($limpiar as $limpiar2) {
                 
                   if($limpiar2->canlote==0)
                   {
                        $borrar= \App\lotes::find( $limpiar2->id );
                        $borrar->delete();  
                   }
                                 
        }
          return redirect('ventas/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    $auxeliminar= auxiliar2ventas::find($id);

    $id2=$auxeliminar->idprods3;

            $costo =\App\producto::find($id2);
            //$lot=\App\lotes::find($id);
          $lot=\App\lotes::where('idprodsl',$id2)->get();
          $lot2=\App\lotes::find($lot[0]->id);

           
                    $caj=$auxeliminar->cancompra3 * $costo->uniCaja;
                    $uni=$auxeliminar->preciocomp3;

                   $lot2->canlote = $lot2->canlote+($uni+$caj);
                    $lot2->save();




    $auxeliminar->delete();
        return redirect('ventas/create');   
    }
}
