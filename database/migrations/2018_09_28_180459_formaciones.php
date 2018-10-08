<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Formaciones extends Migration
{
    public function up()
    {
        Schema::create('formaciones',function(Blueprint $table)
        {
          $table->increments('IdFormAcademica');

          $table->integer('IdTramites')->unsigned();
          $table->foreign('IdTramites')->references('IdTramites')->on('tramites');
          
          $table->integer('IdPeriodo')->unsigned();
          $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');
          

          $table->date('Fecha');
          $table->string('Fotos',50);
          $table->string('Baucher',50);

          $table->integer('IdTurno')->unsigned();
          $table->foreign('IdTurno')->references('IdTurno')->on('turnos');
         
          $table->integer('IdGrupo')->unsigned();
          $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');
         

          $table->date('FechaBaja');


          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('formaciones');
    }
}
