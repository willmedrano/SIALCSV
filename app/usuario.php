<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //public $timestamps=false;
    protected $table="usuarios";

   protected $fillable = ['login','pass','FkEmp','hola'];


   public static function cargarUsuario($id){
    	return  empleados::where('id','=',$idUsu)
    	->get();
    }

}
