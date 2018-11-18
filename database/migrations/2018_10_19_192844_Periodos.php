<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Periodos extends Migration
{
     public function up()
        {
            Schema::create('periodos',function(Blueprint $table)
            {
                $table->increments('IdPeriodo');
                $table->string('Periodo',50);

                $table->integer('IdGrupo')->unsigned();
                $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down()
        {
            Schema::drop('periodos');
        }
}
