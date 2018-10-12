<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    public function up()
    {
        Schema::create('cursos',function(Blueprint $table)
        {
          $table->increments('IdCurso');

          $table->integer('IdMateria')->unsigned();
          $table->foreign('IdMateria')->references('IdMateria')->on('materias');
          
          $table->integer('IdMaestros')->unsigned();
          $table->foreign('IdMaestros')->references('IdMaestros')->on('maestros');

          $table->integer('IdPeriodo')->unsigned();
          $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');

          $table->integer('IdTurno')->unsigned();
          $table->foreign('IdTurno')->references('IdTurno')->on('turnos');

          $table->integer('IdGrupo')->unsigned();
          $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');


          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('cursos');
    }
}
