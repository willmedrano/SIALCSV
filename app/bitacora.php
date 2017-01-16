<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table="bitacoras";

   protected $fillable = ['descripcion','fecha','hora','tipo','idUsu'];
}
