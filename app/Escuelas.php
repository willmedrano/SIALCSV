<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    protected $table = "escuelas";
    //protected $primaryKey="idescuela"; por siqueremos hacer llaves primarias
     protected $fillable = ['nomesc', 'nomdirec', 'telesc', 'diresc'];

     //para sacar de dos tablas recordar poner use DB arriba
   public static function mostrarEscuela(){
   		 return DB::table('escuelas')
            ->select('escuelas.*')
            ->orderBy('escuelas.id')
            ->get();
   }
   
}
