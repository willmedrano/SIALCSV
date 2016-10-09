<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\producto;
class inventario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){// espara realizar un filtro antes 
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->producto = producto::find($route->getParameter('inve'));// recibe lo que tenemos ya definido en routas 
    }
    public function index()
    {
        //
        $pro =\App\producto::proPro();
        $prov =\App\proveedor::All();
       // return view('layouts.inicio');
       return view('inventario.index',compact('pro'),compact('prov'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('ventas.facturar');
       // return view('ventas.venta');
        $prov =\App\proveedor::All();
        return view('inventario.formInv',compact('prov'));
        
       //return view('inventario.lotes');

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

        \App\producto::create([
            'cod' => $request['cod'],
            'nomProd' => $request['nom'],
            'marca' => $request['marca'],
            'uniCaja' => $request['uniCaja'],
            'idProve' => $request['idProve'],
            'gUni' => $request['gUni'],
            'gCaja' => $request['gCaja'],
            'desc' => $request['desc'],
        ]);
        
        return redirect('inve/create')->with('message','store');
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
        $pro2 =\App\producto::mostrar($id);
        return view('inventario.index',compact('pro2'));
       
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
        return response()->json($this->producto->toArray());

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
         $this->producto->fill($request->all());
         $this->producto->save();
         Session::flash('message','producto Editada Correctamente');
         return Redirect::to('/formInv');
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
