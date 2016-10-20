<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('calle',100);
            $table->integer('num_ext');
            $table->string('estado',100);
            $table->string('ciudad',100);
            $table->string('colonia',100);
            $table->integer('cp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direccion');
    }
}
