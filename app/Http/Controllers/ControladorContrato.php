<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\contratos;
class ControladorContrato extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contr=contratos::Mostrarcontrato();
        return view('paquetesescolares.contrato.index', compact('contr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $aux =\App\auxiliar::auxComp();
        $contrato =\App\auxcontrato::auxcontrato();
        $prov = \App\paqueteaux::All();
        $esc = \App\Escuelas::All();

        return view('paquetesescolares.contrato.registrocontrato', compact('prov','aux','esc','contrato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
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
                    $canAcumulado = $lotes[0]->canlote -  ($valor->cancont3*$costo->uniCaja);
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
        
 
        
        return redirect('contrato/create')->with('message','store');;
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

public function llenadoProductopaquetes($codigopro){
    $producto=\App\paqueteaux::where('id',$codigopro)->get();
    //$aux3=\App\paqueteaux::all();
    /*foreach ($producto as $p) {
      $codigopro=$p->id;
    }*/

    //echo $producto->toArray();
    
   // $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
    //return Response::json($producto);
    return response()->json($producto->toArray());
  }
  public function preciodelpaquete($codigopro){
    
 
     $paq=\App\paqueteaux::all();
     $nombrep="";
        foreach ($paq as $v) {
             if($v->id == $codigopro){
              
              $nombrep=$v->nompaquete;
             }
             
        }
        $s=0;
    $xu=\App\producto::where('marca',$nombrep)->get();
     foreach ($xu as $vs) {
             if($vs->id){
              
              $s=$vs->id;
             }
             
        }
    $lot=\App\lotes::where('idprodsl',$s)->get();
    /*foreach ($producto as $p) {
      $codigopro=$p->id;
    }*/

    //echo $producto->toArray();
    
   // $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
    //return Response::json($producto);
    return response()->json($lot->toArray());
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
