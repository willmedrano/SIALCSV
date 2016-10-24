<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
class usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;


    //public $timestamps=false;
    protected $table="usuarios";

   protected $fillable = ['login','password','correoEmp','idemp'];
   
   protected $hidden = ['password', 'remember_token'];

    public static function cargarPermitir()
   {
    	return  DB::table('empleados')
            ->select('empleados.*')
            ->orderBy('empleados.id')
            ->get(); 	
    }

}
