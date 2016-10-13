<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\compras;
use App\detalle_compra;
use App\producto;
class contoladorCompra extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('compra.modificarcompra');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       // $pro =\App\compra::mostrarcompra($request);
        $prov =\App\proveedor::All();
        return view('compra.createcompra',compact('prov'));
      
       
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
        
       echo "hola";
       /* compras::create([
            'tipopago' => $request['formap'],
            'montocompra' => $request['total'],
            'fechacompra' => $request['fechacompra'], 
        ]);
        detalle_compra::create([
            'tipopago' => $request['formap'],
            'montocompra' => $request['descompra'],
            'fechacompra' => $request['fechacompra'], 
        ]);*/
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
