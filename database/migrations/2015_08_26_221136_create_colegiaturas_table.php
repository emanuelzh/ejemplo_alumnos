<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('colegiaturas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id');
            $table->integer('semestre');
            $table->double('promedio');
            $table->double('monto_colegiatura');
            $table->double('porcentaje_beca');
            $table->double('monto_pagable');
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
        //
        Schema::drop('colegiaturas');
    }
}
