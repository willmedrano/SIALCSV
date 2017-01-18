<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class ventas extends Controller
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
       // $id= Auth::user()->idemp;
        $pendiente= \App\auxiliar3ventas::auxComp3();
        
       $emp =\App\empleado::All();
        return view('ventas.facturar',compact('pendiente','emp'));

        
    }
    public function llenadoProducto2($codigopro)//retorno el nombre del producto y el proveedor.
    {
        $productor=\App\producto::where('cod',$codigopro)->get();
    $producto=\App\lotes::where('idprodsl',$productor[0]->id)->get();
    
    $productor2=\App\producto::find($producto[0]->idprodsl);

    
    return response()->json($productor2->toArray());
    
      

  }
      public function VerificarEPCaja($codigopro)//verica la cantidad que se tiene en caja de los productos.
      {

         $productor=\App\producto::where('cod',$codigopro)->get();
         $producto=\App\lotes::where('idprodsl',$productor[0]->id)->get();
    
 
    return response()->json($producto->toArray());

  }
    public function VerificarEPUnidades($codigopro)//verica la cantidad que se tiene en caja de los productos en unidades.
      {
        
      //  $producto1=\App\producto::proLot2($codigopro);
 
    //return response()->json($producto1->toArray());
  }

    /**
      * Show the form for creating a new resource.   
     * @return \Illuminate\Http\Response
     **/
    public function create()
    {
        $id= Auth::user()->idemp;
       $aux =\App\auxiliar2ventas::auxComp2($id);
       $emp =\App\empleado::All();
       // $pro =\App\compra::mostrarcompra($request);
        $prov =\App\proveedor::All();
        
        return view('ventas.venta',compact('prov','aux','emp'));
 
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

        $id= Auth::user()->idemp;
        \App\facturacion::create([
             
            'fechaf' => $request['fecha'],
            'total' => $request['total'],
            'nomcli' => $request['cli'],
            'iva_credito' => $request['iva'],
            'detalle' => $request['des'],
            'idempl' => $request['codE'],
        ]);
        \App\pyg::create([
                'ingreso' => $request['total'],
                'egreso' => 0,
                'fecha' => $request['fecha'],
                'detalle' => "Por venta de Productos",
            
        ]);
        $ids;
        $gAux =\App\facturacion::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\auxiliar2ventas::auxComp2($id);

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
       
        
        



  $eAux =\App\auxiliar2ventas::auxComp2($id);
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\auxiliar2ventas::find( $v->id );
                  $auxeliminar->delete();               
        }


        $limpiar=\App\lotes::All();
        foreach ($limpiar as $limpiar2) {
                 
                   if($limpiar2->canlote==0)
                   {
                        $borrar= \App\lotes::find( $limpiar2->id );
                        $borrar->delete();  
                   }
                                 
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
        
        $comp=\App\ventasp::pro2($id);
        return view('ventas.detalle',compact('comp'));
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
