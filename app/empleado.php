<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //public $timestamps=false;
    protected $table="empleados";

   protected $fillable = ['nomEmp','fotoEmp','apeEmp','NacEmp','DUIEmp','NITEmp','dirEmp','telEmp','sueldoEmp','cargoEmp','estadoEmp','sexEmp','contraEmp'];


   public static function cargarEmpleado($id)
   {
    	return  empleado::where('idEmp','=',$id)
    	->get();
    }

    //public static function sEmp(){
   		 //return DB::table('empleados')
            
//return empleado::select('empleados.sexEmp')
          //  ->get();
//}
}


