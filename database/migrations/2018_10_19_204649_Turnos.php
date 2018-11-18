<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turnos extends Migration
{
    public function up()
        {
            Schema::create('turnos',function(Blueprint $table)
            {
                $table->increments('IdTurno');
                $table->string('Turno',50);

                $table->integer('IdPeriodo')->unsigned();
                $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down()
        {
            Schema::drop('turnos');
        }
}
