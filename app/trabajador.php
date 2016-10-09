<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
	public $timestamps=false;
    protected $table="trabajadors";

   protected $fillable = ['nom','ape'];
}
