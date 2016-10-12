<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idprodet')->unsigned();
            $table->foreign('idprodet')->references('id')->on('productos');
            $table->integer('idcontratos')->unsigned();
            $table->foreign('idcontratos')->references('id')->on('contratos');
            $table->integer('cantidadcon'); 
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
        Schema::drop('detalle_contratos');
    }
}
