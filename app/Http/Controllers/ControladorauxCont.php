<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\auxcontrato;
class ControladorauxCont extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         auxcontrato::create([
            'preciocomp3' => $request['cajavender'],
            'descompra3' => $request['subtotal'],
            'cancompra3' => $request['cajavender'],
            'idprods3' => $request['hprod'],  
        ]);

         $id=$request['hprod'];

            $costo =\App\producto::find($id);
            //$lot=\App\lotes::find($id);
          $lot=\App\lotes::where('idprodsl',$id)->get();
          $lot2=\App\lotes::find($lot[0]->id);

           
                    $caj=$request['cajavender'];
                    $uni=$request['cajavender'];

                   $lot2->canlote = $lot2->canlote-($caj);
                    $lot2->save();
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
         $auxeliminar= auxcontrato::find($id);
        $auxeliminar->delete();
        return redirect('contrato/create');  
    }
}
