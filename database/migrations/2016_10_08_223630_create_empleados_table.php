<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
              $table->string('fotoEmp');
             $table->string('nomEmp');
             $table->string('apeEmp');
             $table->date('NacEmp');
             $table->string('DUIEmp');
             $table->string('NITEmp');
             $table->string('dirEmp');
             $table->string('telEmp');
             $table->float('sueldoEmp');
             $table->string('cargoEmp');
             $table->boolean('estadoEmp')->default(true);
             $table->string('sexEmp');
             $table->date('contraEmp');
             $table->timestamps();
        });
         DB::table('empleados')->insert([
             'fotoEmp' => 'userimagen-1' ,
             'nomEmp' => 'admin' , 
             'apeEmp' => 'admins' ,
             'NacEmp' => ' 1993-09-03 ' ,
             'DUIEmp' => '100' ,
             'NITEmp' => '1000' ,
             'dirEmp' => 'a' ,
             'telEmp' => '10000' ,
             'sueldoEmp' => 26 ,
             'cargoEmp' => 'Administrador' ,
             'sexEmp' => 'Masculino' ,
             'contraEmp' => ' 2015-09-03 ' , 
              'created_at' => ' 2015-09-03 ' ,
               'updated_at' => ' 2015-09-03 '
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
