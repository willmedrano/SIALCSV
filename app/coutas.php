<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class coutas extends Model
{
    // aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    protected $table = "coutas";      //Aqui se define el nombre de la tabla
    //fechcouta;        Es para conocer la fecha del proximo pago
    //estadcuota;    Es para indicar que los falta pagar dicha compra que adquirio el dueño de la institucion
    //morac;         Es por si le toca pagar mora por no haber pagado a la fecha que le tocaba cancelarle al proveedor
    //ncuotas;       Es la cantidad de cuotas que tiene que pagar
    //idcompsc;      Es para tener el conocimiento de que compra es que debo de pagar
    protected $fillable = ['fechcouta', 'estadcuota', 'morac', 'cuotas', 'idcompsc'];//Aqui creamos los campos de la tabla 

    
   public static function mostar()
    {

     
          return DB::table('coutas')
            ->join('compras', 'compras.id', '=', 'coutas.idcompsc')
            ->select('coutas.*')
            ->orderBy('coutas.fechcouta')
            ->get();
            /* return DB::table('coutas')
            ->join('compras', 'compras.id', '=', 'coutas.idcompsc')
            ->join('detalle_compras', 'detalle_compras.idcomps', '=', 'compras.id')
            ->join('productos', 'productos.id', '=', 'detalle_compras.idprods')
            ->join('proveedores', 'proveedores.id', '=', 'productos.idProve')
            ->select('coutas.*',  'proveedores.nom')
            ->orderBy('coutas.fechcouta')
            ->get();*/
   }
}
