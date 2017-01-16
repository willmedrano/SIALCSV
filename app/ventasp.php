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
}
