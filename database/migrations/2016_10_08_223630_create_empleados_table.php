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
             'fotoEmp' => 'userimagen-1.jpg' ,
             'nomEmp' => 'elio' , 
             'apeEmp' => 'monterrosa' ,
             'NacEmp' => ' 1950-09-03 ' ,
             'DUIEmp' => '03887733-6' ,
             'NITEmp' => '1010-030950-101-7' ,
             'dirEmp' => 'a' ,
             'telEmp' => '7252-1492' ,
             'sueldoEmp' => 0 ,
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
