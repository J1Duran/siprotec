<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        //
        Schema::create('usuarios', function($table){
        $table->increments('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password', 60);
        $table->string('cedula',45);
        $table->string('cargo',45);
        $table->string('id_area',45);
        $table->string('id_gerencia');
        $table->string('id_grupo');
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
        //
    }

}
