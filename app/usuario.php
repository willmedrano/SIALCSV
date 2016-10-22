<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class usuario extends Model
{
    //public $timestamps=false;
    protected $table="usuarios";

   protected $fillable = ['login','pass','correoEmp','idemp'];



    public static function cargarPermitir()
   {
    	return  DB::table('empleados')
            ->select('empleados.*')
            ->orderBy('empleados.id')
            ->get(); 	
    }

}
