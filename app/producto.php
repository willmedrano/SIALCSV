<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $table = "productos";
   

   protected $fillable = ['cod','nom','marca','uniCaja','idProve','gUni, gCaja','estado','desc'];

}
 