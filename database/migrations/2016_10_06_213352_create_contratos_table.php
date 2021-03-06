<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');  
            $table->date('fechaf'); 
            $table->double('total', 7, 2);   //   Equivalente a numeros reales con precisión, 3 digitos en total y 2 despues de el punto decimal

            $table->date('fechae');
            $table->string('detalle');       
            $table->boolean('estado')->default(true);
            $table->integer('idescuelas')->unsigned();
            $table->foreign('idescuelas')->references('id')->on('escuelas');
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
        Schema::drop('contratos');
    }
}
