<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxcontratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxcontratos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('preciocont3', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->integer('cancont3');        //Equivalente a numeros enteros
            $table->integer('idprods3')->unsigned();
            $table->foreign('idprods3')->references('id')->on('productos');
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
        Schema::drop('auxcontratos');
    }
}
