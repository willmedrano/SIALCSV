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
             $table->string('imag');
             $table->string('auxiliar');
             $table->integer('idemp')->unsigned();
             $table->foreign('idemp')->references('id')->on('empleados');
             $table->rememberToken();
             $table->timestamps();
             
        });
         // Insert some stuff
    DB::table('usuarios')->insert(array('login'=>'elio', 'password'=>bcrypt('monterrosa'), 'correoEmp' => 'willmedrano93@gmail.com', 'imag' => 'userimagen-1.jpg','auxiliar'=>'monterrosa' ,'idemp' => 1, 'created_at' => ' 2015-09-03 ' ,
            'updated_at' => ' 2015-09-03 '));
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
