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
use App\pyg;

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
      

      $detalle=compras::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_compra";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

public function reporteDComprasDetalle(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=\App\empleado::detaComp();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_detallecompra";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }



    public function reporteDVentas(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=\App\facturacion::emp();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_ventas";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }



public function reporteDPyg(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=\App\pyg::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_pyg";
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

public function reporteDFactura(Request $request)
    {

      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
       $gAux =\App\facturacion::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }
        $fac=\App\facturacion::find($ids);
      $detalle=ventasp::pro2($ids);
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_facturas";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle','fac'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }


public function reporteDEmpleados(Request $request)
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




public function reporteDCatalogo(Request $request)
    {

      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=producto::proPro();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporte_catalogo";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

    public function crearPDF($datos,$vistaurl,$tipo) 
    {

      $date2 = date('d-m-Y');
      $date1 = date('g:i:s a');

       $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date','date2','date1'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}if($tipo==3){return $pdf->stream('reportvd');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


     public function crear_reporte_porpais($tipo,$fech){
     if ($tipo==1) {
      $vistaurl="pdf.reporte_por_pais";
     $paises=empleado::Rnombre($fech);
     }
     
     if($tipo==3){
      $fech=$request["nac"];


        $vistaurl="pdf.reporte_ventas";
     $paises=empleado::fv($fech);
     }

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




    public function pdfstoreventa(Request $request)
    {
        $tipo=3;

        $fech=$request["nac"];


        $vistaurl="pdf.reporte_ventas";
     $paises=empleado::fv($fech);

     return $this->crearPDF($paises, $vistaurl,$tipo);
    }

     public function pdfstorevent(Request $request)
    {
        $tipo=3;

        $fech=$request["nac"];


        $vistaurl="pdf.reporte_ventas";
     $paises=empleado::fv($fech);

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
