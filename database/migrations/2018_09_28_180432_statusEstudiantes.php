<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatusEstudiantes extends Migration
{
    public function up()
    {
        Schema::create('statusEstudiantes',function(Blueprint $table)
        {
          $table->increments('IdStatus');

          $table->integer('IdTipoBajas')->unsigned();
          $table->foreign('IdTipoBajas')->references('IdTipoBajas')->on('tipoBajas');
         
        
          $table->date('FechaBaja');
          $table->string('Observacion',250);


          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('statusEstudiantes');
    }
}
