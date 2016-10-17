<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//Aqui estomos creando la tabla cuotas y definimos los campos que tendra dicha tabla.
    {
        Schema::create('coutas', function (Blueprint $table) {
            $table->increments('id');
             $table->date('fechcouta');
             $table->integer('estadcuota');
             $table->double('morac', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->integer('ncuotas');        //Equivalente a numeros enteros
             $table->double('cuotas', 7, 2);   //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
             $table->integer('idcompsc')->unsigned();
             $table->foreign('idcompsc')->references('id')->on('compras');
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
        Schema::drop('coutas');
    }
}
