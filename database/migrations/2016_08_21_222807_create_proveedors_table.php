<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schem:: create('proveedor',function(Blueprint $table){

            $table->increments('idProve');
            $table->string('nom');
            $table->string('tel');
            $table->string('NIT');
            $table->string('dir');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
