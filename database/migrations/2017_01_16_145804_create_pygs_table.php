<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePygsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pygs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('ingreso', 7, 2);
            $table->double('egreso', 7, 2);
            $table->date('fecha');
            $table->string('detalle');
  
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
        Schema::drop('pygs');
    }
}
