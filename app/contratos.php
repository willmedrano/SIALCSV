<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contratos extends Model
{
    // aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    protected $table = "contratos";      //Aqui se define el nombre de la tabla
    //fechaicon;     Es para saber la fecha inicia el contrato con de la libreria con la escuela
    //fechafcon;     Es para saber la fecha finaliza el contrato con la libreria con la escuela
    //estadocon;     Es saber si sigue bigente el contrato de la libreria y escuela
    //cantidadcon;   Es saber la cantidad de poductos adquirir..
    //montocon;      Es para tener un control del monto que pagara la escuela a la libreria
    //idescuelas;    Es para indicar que escuela esta con el contrato. 
    protected $fillable = ['fechaicon', 'fechafcon', 'estadocon', 'cantidadcon', 'montocon', 'idescuelas'];//Aqui creamos los campos de la tabla 
}
