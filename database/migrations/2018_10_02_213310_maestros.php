<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maestros extends Migration
{
    public function up()
    {
        Schema::create('maestros',function(Blueprint $table)
        {
          $table->increments('IdMaestros');
          $table->string('NombreM',50);
          $table->string('APaterno',50);
          $table->string('AMaterno',50);



          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('maestros');
    }
}
