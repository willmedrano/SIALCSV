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
class contoladorCompra extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp=compras::Mostrarcompras();
        $prov =\App\proveedor::All();
         $comptotal=compras::all();
        return view('compra.detalledecompra',compact('comp','prov','comptotal')); 
     // return view('compra.modificarcompra',compact('comp')); 
     // $aux =\App\auxiliar::auxComp();
       // return view('layouts.inicio');
     //  return view('compra.create',compact('aux'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $aux =\App\auxiliar::auxComp();
       // $pro =\App\compra::mostrarcompra($request);
        $prov =\App\proveedor::All();
        return view('compra.createcompra',compact('prov','aux'));
      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function llenadoProducto($codigopro){
    $producto=producto::where('cod',$codigopro)->get();
    /*foreach ($producto as $p) {
      $codigopro=$p->id;
    }*/

    //echo $producto->toArray();
    
   // $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
    //return Response::json($producto);
    return response()->json($producto->toArray());
  }
    public function store(Request $request)
    {
        
       //echo "hola";
        compras::create([
            'tipopago' => $request['formap'],
            'montocompra' => $request['total'],
            'fechacompra' => $request['fechacompra'], 
        ]);
        $ids;
        $gAux =\App\compras::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\auxiliar::All();
        foreach ($gAux as $valor) 
        {
            detalle_compra::create([
                'preciocomp' => $valor->preciocomp2,
                'descompra' => $valor->descompra2,
                'cancompra' => $valor->cancompra2,
                'idprods' => $valor->idprods2,
                'idcomps' => $ids,

            ]);
            




            $id=$valor->idprods2;
            $costo =\App\producto::find($id);
            $lotes=lotes::Llenarlotes($id);
            
                if(empty($lotes)){
                lotes::create([
                'preciolote' => $valor->preciocomp2,
                'deslote' => $valor->descompra2,
                'canlote' => $valor->cancompra2,
                'idprodsl' => $valor->idprods2,
                'idcompsl' => $ids,
                 ]);

                $costo->cPromedio=($valor->preciocomp2/$valor->cancompra2);
                //$costo->save();
                }
                else{
                    //dd($lotes[0]->canlote);
                    $i=$lotes[0]->id;
                    $lot = lotes::find($i);
                    $precioAcumulado = $lotes[0]->preciolote + $valor->preciocomp2;
                    $descuentoAcumulado =  $lotes[0]->deslote + $valor->descompra2;
                    $canAcumulado = $lotes[0]->canlote +  $valor->cancompra2;
                    $lot->preciolote = $precioAcumulado;
                    $lot->deslote = $descuentoAcumulado;
                    $lot->canlote = $canAcumulado;
                    $lot->save(); 

                    $costo->cPromedio=((($lotes[0]->canlote*$costo->cPromedio)+$valor->preciocomp2)/($valor->cancompra2+$lotes[0]->canlote));
                  
                    }
  $costo->save();
            
            
    }
        $ts=0;
        $ban=1;
        coutas::create([
            'fechcouta' => $request['fechacompra'],
            'estadcuota' => $ban,
            'morac' => $ts, 
            'ncuotas' => $request['ncuotas'],
            'cuotas' => $request['total'],
            'idcompsc' => $ids,
        ]);
        
        



  $eAux =\App\auxiliar::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= auxiliar::find( $v->id );
                  $auxeliminar->delete();               
        }
        
        /*
SELECT id, fechcouta, estadcuota, morac, ncuotas, cuotas, idcompsc, 
       created_at, updated_at
  FROM coutas;

        */
        
        return redirect('compra/create');
        //return redirect('compra/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $pro2 =\App\producto::mostrar($id);
        return view('compra.createcompra',compact('pro2'));

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
