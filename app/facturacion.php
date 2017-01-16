<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    //definimos las tabla creada como se llama
     protected $table = "facturacions";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['fechaf', 'total', 'nomcli', 'iva_credito', 'detalle', 'idempl'];

     public static function emp(){
         return DB::table('facturacions')
          ->join('empleados', 'empleados.id', '=', 'facturacions.idempl')
            ->select('facturacions.*', 'empleados.nomEmp')
            ->orderBy('facturacions.id')
            ->get();
   }
}
