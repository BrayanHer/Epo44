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

                $table->integer('IdMaestro')->unsigned();
                $table->foreign('IdMaestro')->references('IdMaestro')->on('maestros');

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down()
        {
            Schema::drop('cursos');
        }
}
