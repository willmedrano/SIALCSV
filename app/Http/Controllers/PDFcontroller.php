<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\empleado;
use App\usuario;
use App\compras;
use App\proveedor;
use App\producto; 
use App\detalle_compra;
use App\ventasp;
use App\lotes;
use App\pagos;
class PDFcontroller extends Controller
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
        return view("pdf.listado_reportes");
    }

public function reporteDCompras(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=producto::proPropdf();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.prueba_reporte";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }




    public function reporteDVentas(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=ventasp::Ventaspdf();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_ventas";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

    public function reporteDInventarios(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=lotes::proLot();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_inventario";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }



public function reporteDPagos(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=pagos::pag();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_pagos";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }






    public function crearPDF($datos,$vistaurl,$tipo) 
    {

       $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


     public function crear_reporte_porpais($tipo,$fech){

     $vistaurl="pdf.reporte_por_pais";
     $paises=empleado::Rnombre($fech);
     return $this->crearPDF($paises, $vistaurl,$tipo);
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
        $tipo=1;

        $fech=$request["nac"];


        $vistaurl="pdf.reporte_por_pais";
     $paises=empleado::Rnombre($fech);
     return $this->crearPDF($paises, $vistaurl,$tipo);
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
