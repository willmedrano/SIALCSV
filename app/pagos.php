<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;
class pagos extends Model
{
	protected $table = "pagos"; 
    protected $fillable = ['fechpago', 'dias', 'pagos', 'idempleado'];



    public static function pag(){
   		 return DB::table('pagos')
            ->join('empleados', 'pagos.idempleado', '=', 'empleados.id')
            ->select('pagos.*',  'empleados.nomEmp','empleados.sueldoEmp')
            ->orderBy('pagos.id')
            ->get();
   }
}
