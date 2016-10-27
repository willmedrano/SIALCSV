<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ControladorContrato extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paquetesescolares.contrato.index');
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
        $ids;
        $gAux =\App\contratos::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\contratos::All();
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
                'canlote' => ($valor->cancompra2*$costo->uniCaja),
                'idprodsl' => $valor->idprods2,
                'idcompsl' => $ids,
                 ]);

                $costo->cPromedio=$valor->preciocomp2;
                //$costo->save();
                }
                else{
                    //dd($lotes[0]->canlote);
                    $i=$lotes[0]->id;
                    $lot = lotes::find($i);
                    $precioAcumulado = $lotes[0]->preciolote + $valor->preciocomp2;
                    $descuentoAcumulado =  $lotes[0]->deslote + $valor->descompra2;
                    $canAcumulado = $lotes[0]->canlote +  ($valor->cancompra2*$costo->uniCaja);
                    $lot->preciolote = $precioAcumulado;
                    $lot->deslote = $descuentoAcumulado;
                    $lot->canlote = $canAcumulado;
                    $lot->save(); 

                    $costo->cPromedio=((($lotes[0]->canlote/$costo->uniCaja)*$costo->cPromedio)+($valor->cancompra2*$valor->preciocomp2))/(($lotes[0]->canlote/$costo->uniCaja)+$valor->cancompra2);
                  
                    }
  $costo->save();
            
            
    }
       
        $cuot=$request['cuotas'];

        if(empty($cuot))
        {
            coutas::create([
                'fechcouta' => $request['fechacompra'],
                'cuotas' => $request['total'],
                'idcompsc' => $ids,
                ]);
        }
        else
        {
            $dt=$request['fechacompra'];
            for ($i=1; $i <=$cuot ; $i++) { 
            # code...
                $v="+"+$i+" month";
                $dt =date("Y/m/d", strtotime("$dt +1 month"));
                

                coutas::create([
                'fechcouta' => $dt,
                'cuotas' => ($request['total']/$request['cuotas']),
                'idcompsc' => $ids,
                ]);
            }
        }
        
        */



  $eAux =\App\auxcontrato::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= auxcontrato::find( $v->id );
                  $auxeliminar->delete();               
        }
        
        /*
SELECT id, fechcouta, estadcuota, morac, ncuotas, cuotas, idcompsc, 
       created_at, updated_at
  FROM coutas;

        */
        
        return redirect('contrato/create');
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
    $pro=\App\paqueteaux::where('idprod',$codigopro)->get();
    /*foreach ($producto as $p) {
      $codigopro=$p->id;
    }*/

    //echo $producto->toArray();
    
   // $presentaciones=Presentaciones::where('producto_id',$idProducto)->get();
    //return Response::json($producto);
    return response()->json($pro->toArray());
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
