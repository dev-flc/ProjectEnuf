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
            $table->integer('id_usuario')->unsigned()->nullable();
            $table->integer('id_direccion')->unsigned()->nullable();
            $table->integer('id_escuela')->unsigned()->nullable();
            $table->integer('id_tutor')->unsigned()->nullable();

            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');;
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
