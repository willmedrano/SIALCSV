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
