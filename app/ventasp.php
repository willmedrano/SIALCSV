<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class ventasp extends Model
{
     //definimos las tabla creada como se llama
     protected $table = "ventasps";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['cantidadv', 'preciov', 'idFact', 'idProd'];


     public static function Ventaspdf(){
       return DB::table('ventasps')
            ->join('facturacions', 'facturacions.id', '=', 'ventasps.idFact')
            ->join('productos', 'productos.id', '=', 'ventasps.idProd')
            ->select('ventasps.*','facturacions.fechaf','facturacions.total','productos.cod','productos.nomProd','productos.marca')
            ->orderBy('facturacions.id')
            ->get();
   }

   public static function pro2($id){
       return DB::table('productos')
       ->join('ventasps', 'ventasps.idProd', '=', 'productos.id')
       ->where('ventasps.idFact', '=', $id )
            //->where('detalle_compras.idcomps','=',$id);
          //->join('compras', 'compras.id', '=', )
            
            ->select('ventasps.*','productos.nomProd')
            //->orderBy('productos.id')
            ->get();
   } 
}
