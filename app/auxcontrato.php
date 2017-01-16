<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class auxcontrato extends Model
{
     //
   protected $table = "auxcontratos";//Aqui se define el nombre de la tabla
    //definicion de campos 
    //Equivalente a numeros enteros
    //preiocomp;     de compra
    //descimora; se recibio un descuento por compra
    //cancompra; es la cantidad de productos comprados
    //idprods;   es para saber la informacion de ese producto que sea adquirido
    //idcomps;   es para saber que compra que de que se adquirido.
    protected $fillable = ['preciocomp3', 'descompra3', 'cancompra3', 'idprods3'];//Aqui creamos los campos de la tabla 
   
 public static function auxcontrato(){
         return DB::table('auxcontratos')
            ->join('productos', 'productos.id', '=', 'auxcontratos.idprods3')
            ->select('auxcontratos.*',  'productos.cod','productos.nomProd','productos.marca')
            ->orderBy('auxcontratos.id')
            ->get();
   }
 

   }

  