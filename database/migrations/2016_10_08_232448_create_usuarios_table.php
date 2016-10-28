<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
             $table->string('login');
             $table->string('password');
             $table->string('correoEmp');
             $table->boolean('estadousurio')->default(true);
             $table->integer('idemp')->unsigned();
             $table->foreign('idemp')->references('id')->on('empleados');
             $table->rememberToken();
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
        Schema::drop('usuarios');
    }
}
