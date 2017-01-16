<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pyg extends Model
{
    //
    protected $table = "pygs";
     protected $fillable = ['ingreso', 'egreso', 'fecha', 'detalle'];
}
