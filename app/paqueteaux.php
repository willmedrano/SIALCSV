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
   public static function mostrarpaquetes(){
   		 return DB::table('productos')
   		    ->join('paqueteauxes', 'paqueteauxes.nompaquete', '=', 'productos.marca')
            ->join('proveedores', 'productos.idProve', '=', 'proveedores.id')
            ->select('productos.*' ,'paqueteauxes.*', 'proveedores.nom')
            ->orderBy('productos.id')
            ->get();
   }
}
