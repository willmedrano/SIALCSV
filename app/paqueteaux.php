<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use producto;
class paqueteaux extends Model
{
  
     protected $table = "paqueteauxes"; 

     protected $fillable = ['id', 'nompaquete', 'preciop'];//Aqui creamos los campos de la tabla 

       //para sacar de dos tablas recordar poner use DB arriba
   /*public static function mostrarpaquetes(){
   		 return DB::table('productos')
            ->select('productos.*' ,'paqueteauxes.nompaquete', 'paqueteauxes.preciop', 'paqueteauxes.idprod', 'proveedores.nom')
            ->orderBy('productos.id')
            ->get();
   }*/
}
