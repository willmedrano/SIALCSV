<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
             $table->date('fechpago');
             $table->integer('dias')->default(0);;
              //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->double('pagos', 7, 2);   //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->integer('idempleado')->unsigned();
             $table->foreign('idempleado')->references('id')->on('empleados');
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
        Schema::drop('pagos');
    }
}
