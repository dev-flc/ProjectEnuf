<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('matricula',100);
            $table->integer('estatus');
            $table->string('semestre',100);
            $table->integer('id_usuario');
            $table->integer('id_direccion');
            $table->integer('id_escuela')->unsigned();
            $table->integer('id_tutor')->unsigned();

            $table->foreign('id_escuela')->references('id')->on('escuela');
            $table->foreign('id_tutor')->references('id')->on('tutor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumno');
    }
}
