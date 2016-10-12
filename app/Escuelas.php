<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    protected $table = "escuelas";
    //protected $primaryKey="idescuela"; por siqueremos hacer llaves primarias
     protected $fillable = ['nomesc', 'nomdirec', 'telesc', 'diresc'];
}
