<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControladorPaqueteEscuela extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paqs= \App\paqueteaux::All();
        return view('paquetesescolares.compraesc.paquetemostar', compact('paqs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paquetesescolares.compraesc.paquetep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
        \App\paqueteaux::create([
            'nompaquete'=>$request['nompaquete'],
            'preciop'=>$request['preciop'],
            ]);
        return redirect('/paqueteregistro/create')->with('message','store');
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
        $paquetesm = \App\paqueteaux::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $paquetesm->nompaquete = $request['nompaquete'];
        $paquetesm->preciop = $request['preciop'];
        }
        if($aux=='2')
        {
            
        }
        if($aux=='3')
        {
            
        }


        $paquetesm->save();
        return redirect('/paqueteregistro/');
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
