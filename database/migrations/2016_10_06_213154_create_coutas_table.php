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
             $table->boolean('estadcuota')->default(false);;
             $table->double('morac', 7, 2)->default(0.00);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
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
