<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod');
            $table->string('nom');
            $table->string('marca');
            $table->Integer('uniCaja');
            $table->Integer('idProve')->unsigned();
            $table->foreign('idProve')->references('id')->on('proveedores');
            $table->Integer('gUni');
            $table->Integer('gCaja');
            $table->boolean('estado')->default(true);
            $table->string('desc');
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
        Schema::drop('productos');
    }
}
