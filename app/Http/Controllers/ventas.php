<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('ventas.facturar');
        
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

         $productor=\App\producto::where('id',$codigopro)->get();
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
        
       $aux =\App\auxiliar2ventas::auxComp3();
       // $pro =\App\compra::mostrarcompra($request);
        $prov =\App\proveedor::All();
        
        return view('ventas.venta',compact('prov','aux'));
        /*
 \App\contratos::create([
             'idescuelas' => $request['formap'],
            'montocon' => $request['total'],
            'fechafcon' => $request['fechacompra'], 
        ]);
        $ids="";
        $gAux =\App\contratos::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux2 =\App\auxcontrato::All();
        foreach ($gAux2 as $valor) 
        {
            \App\detalle_contrato::create([
                
                'idprodet' => $valor->idprods3,
                'idcontratos' => $ids,
                'cantidadcon' => $valor->cancont3,
                'preciocon' => $valor->preciocont3,
            ]);
            

            $id=$valor->idprods3;
            $costo =\App\producto::find($id);
            $lotes=\App\lotes::Llenarlotes($id);
            
                if(empty($lotes)){
                
                }
                else{
                    //dd($lotes[0]->canlote);
                    $i=$lotes[0]->id;
                    $lot = \App\lotes::find($i);
                    $precioAcumulado = $lotes[0]->preciolote;
                    $descuentoAcumulado =  $lotes[0]->deslote - 0;
                    $canAcumulado = $lotes[0]->canlote -  ($valor->cancont3);
                    $lot->preciolote = $precioAcumulado;
                    $lot->deslote = $descuentoAcumulado;
                    $lot->canlote = $canAcumulado;
                    $lot->save(); 

                    $costo->cPromedio=((($lotes[0]->canlote/$costo->uniCaja)*$costo->cPromedio)-($valor->cancont3*$valor->preciocont3))/(($lotes[0]->canlote/$costo->uniCaja)-$valor->cancont3);
                  
                    }
  $costo->save();
            
            
    }
       
  $eAux =\App\auxcontrato::All();
        foreach ($eAux as $v) { 
                  $auxeliminar=\App\auxcontrato::find( $v->id );
                  $auxeliminar->delete();               
        }
        */
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
