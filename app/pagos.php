<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
	protected $table = "pagos"; 
    protected $fillable = ['fechpago', 'estpago', 'atraso', 'pagos', 'idempleado'];
}
