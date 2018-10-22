<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupos extends Migration
{
public function up()
        {
            Schema::create('grupos',function(Blueprint $table)
            {
                $table->increments('IdGrupo');
                $table->string('Grupo',10);

                $table->integer('IdCurso')->unsigned();
                $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

                $table->rememberToken();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::drop('grupos');
        }
}
