<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
       // $pro =\App\compra::mostrarcompra($request);
        $prov = \App\paqueteaux::All();
        $esc = \App\Escuelas::All();
        return view('paquetesescolares.contrato.registrocontrato', compact('prov','aux','esc'));
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
