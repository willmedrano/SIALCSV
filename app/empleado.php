<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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

   public static function cargarUsuario()
   {
      return  DB::table('empleados')
            ->join('usuarios', 'usuarios.idemp', '=', 'empleados.id')
            ->select('empleados.*','usuarios.*')
            ->orderBy('empleados.id')
            ->get();
      
    }
    //public static function sEmp(){
   		 //return DB::table('empleados')
            
//return empleado::select('empleados.sexEmp')
          //  ->get();
//}
}


