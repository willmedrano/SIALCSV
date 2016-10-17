<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //public $timestamps=false;
    protected $table="usuarios";

   protected $fillable = ['login','pass','correoEmp','idEmp'];


   public static function cargarUsuario($id){
    	return  empleados::where('id','=',$idUsu)
    	->get();
    }

}
