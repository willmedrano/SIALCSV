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
             $table->boolean('estpago')->default(false);;
             $table->double('atraso', 7, 2)->default(0.00);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->double('pagos', 7, 2);   //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->integer('idempleado')->unsigned();
             $table->foreign('idempleado')->references('id')->on('compras');
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
