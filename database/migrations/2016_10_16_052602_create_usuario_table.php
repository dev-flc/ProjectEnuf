<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('sexo',100);
            $table->string('tel',100);
            $table->string('cel',100);
            $table->string('email',100);
            $table->string('contrasena',100);
            $table->string('id_tipo',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}
