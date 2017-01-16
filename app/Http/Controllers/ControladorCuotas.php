<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\coutas;
use Carbon\Carbon;

class ControladorCuotas extends Controller
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
        $cuota=coutas::mostar();
        $cuotabase=coutas::all();
        return view('compra.modificarcompra',compact('cuota','cuotabase'));
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
         return view('cuotas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       return view('cuotas.index');
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
        $cuota=coutas::find($id);
        $aux=$request['hi2'];
        date_default_timezone_set("America/El_Salvador");
        $date = Carbon::now();
        if($aux=='3')
        {   
            \App\pyg::create([
                'ingreso' => 0,
                'egreso' => $cuota->cuotas,
                'fecha' => $date,
                'detalle' => "Por pago de cuotas",
            
        ]);



            $cuota->estadcuota =true; 
            $cuota->save();
        }


     

       // Session::flash('mensaje','¡Registro Actualizado!');
        return redirect('/cuotas/');
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
