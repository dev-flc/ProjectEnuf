<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuela', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre',100);
            $table->integer('telefono');
            $table->string('fax',100);
            $table->string('email',100);
            $table->string('id_direccion',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('escuela');
    }
}
