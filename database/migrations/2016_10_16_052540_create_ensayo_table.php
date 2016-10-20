<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnsayoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ensayo',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('fecha',100);
            $table->string('descripcion',400);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ensayo');
    }
}
