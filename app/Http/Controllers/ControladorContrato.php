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
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $comp=contratos::con();
        return view('paquetesescolares.contrato.index', compact('comp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
        $aux =\App\auxcontrato::auxcontrato();
        
        $esc = \App\Escuelas::All();

      
        $prov =\App\proveedor::All();
        


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
    
            \App\contratos::create([
             
            'fechaf' => $request['fecha'],
            'total' => $request['total'],
            'fechae' => $request['cli'],
            //'estado' => $request['iva'],
            'detalle' => $request['des'],
            'idescuelas' => $request['codE'],
        ]);
        $ids;
        $gAux =\App\contratos::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\auxcontrato::All();

        foreach ($gAux as $valor) 
        {
            $cal = \App\producto::find($valor->idprods3);
            \App\detalle_contrato::create([
                //'' => $valor->preciocomp3,
                'preciov' => $valor->descompra3,
                'cantidadv' => $valor->cancompra3,
                'idcontratos' => $ids,
                'idProd' => $valor->idprods3,
               

            ]);
                        
            
    }
       
        
        



  $eAux =\App\auxcontrato::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\auxcontrato::find( $v->id );
                  $auxeliminar->delete();               
        }


        $limpiar=\App\lotes::All();
        foreach ($limpiar as $limpiar2) {
                 
                   if($limpiar2->canlote==0)
                   {
                        $borrar= \App\lotes::find( $limpiar2->id );
                        $borrar->delete();  
                   }
                                 
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
        $comp=\App\detalle_contrato::pro2($id);
        return view('paquetesescolares.contrato.detalle',compact('comp'));
    }


 
  public function preciodelpaquete($codigopro){
    
 

    $productor=\App\producto::where('cod',$codigopro)->get();

    if($productor[0]->cod==$productor[0]->marca)
    {

        $producto=\App\lotes::where('idprodsl',$productor[0]->id)->get();
    }
    else{
        $producto=\App\lotes::where('idprodsl',1)->get();
        $producto[0]->canlote=0;
    }
 


    return response()->json($producto->toArray());
    
  }

  public function llenadoProductopaquetes($codigopro)//verica la cantidad que se tiene en caja de los productos en unidades.
      {
        $pro=\App\Escuelas::All();
        $producto1=\App\Escuelas::find(1);
        $producto1->id=0;
        $producto1->nomesc="";

        foreach ($pro as $pro2) {
            # code...
            if($pro2->id==$codigopro)
            {
                $producto1=\App\Escuelas::find($codigopro);
            }
        }
        
        
        /*if (empty($producto1)) {
            $producto1->nomEmp=0;
        }*/
 
    return response()->json($producto1->toArray());
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
