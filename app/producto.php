<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class producto extends Model
{
    //
    protected $table = "productos";
   

   protected $fillable = ['cod','nomProd','marca','uniCaja','idProve','gUni', 'gCaja','estado','desc','minimo','cPromedio'];

   //para sacar de dos tablas recordar poner use DB arriba
   public static function proPro(){
   		 return DB::table('productos')
            ->join('proveedores', 'productos.idProve', '=', 'proveedores.id')
            ->select('productos.*',  'proveedores.nom')
            ->orderBy('productos.id')
            ->get();
   } 
   //fin
   public static function mostrar($id){
   		 return DB::table('productos')
            ->join('proveedores', 'productos.idProve', '=', 'proveedores.id', 'and', 'productos.id', '=', $id)
            
            ->select('productos.cod','productos.nomProd','productos.marca','productos.uniCaja','productos.desc','productos.minimo','productos.estado',  'proveedores.nom')
            ->get();
   }

   public static function proPropdf(){
       return DB::table('productos')
            ->join('detalle_compras', 'detalle_compras.idprods', '=', 'productos.id')
            ->join('compras', 'compras.id', '=', 'detalle_compras.idcomps')
            ->select('productos.*','detalle_compras.preciocomp','detalle_compras.cancompra', 'compras.fechacompra','compras.montocompra')
            ->orderBy('productos.id')
            ->get();
   }

}
 