<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class detalle_contrato extends Model
{
	// aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    protected $table = "detalle_contratos";      //Aqui se define el nombre de la tabla
    //cantidadcon;  conocer la cantidad de producto que va a adquirir la escuela
    //idprodet;     que productos va adquirir la escuela
    //idcontratos;  que contratos va con la escuela y la libreria.
    
    protected $fillable = ['preciov','cantidadv', 'idcontratos', 'idProd'];//Aqui creamos los campos de la tabla 
   public static function pro2($id){
       return DB::table('productos')
       ->join('detalle_contratos', 'detalle_contratos.idProd', '=', 'productos.id')
       ->where('detalle_contratos.idcontratos', '=', $id )
            //->where('detalle_compras.idcomps','=',$id);
          //->join('compras', 'compras.id', '=', )
            
            ->select('detalle_contratos.*','productos.nomProd')
            //->orderBy('productos.id')
            ->get();
   }
 
}
