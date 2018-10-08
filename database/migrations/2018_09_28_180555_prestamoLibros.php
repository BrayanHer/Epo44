<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrestamoLibros extends Migration
{
    public function up()
    {
        Schema::create('prestamoLibros',function(Blueprint $table)
        {

            $table->increments('IdPrestamo');


            $table->integer('IdMatricula')->unsigned();
            $table->foreign('IdMatricula')->references('IdMatricula')->on('alumnos');
            
            $table->integer('IdLibro')->unsigned();
            $table->foreign('IdLibro')->references('IdLibro')->on('libros');
            

            $table->date('FechaPrestamo');
            $table->date('FechaEntrega');

            

          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('prestamoLibros');
    }
}
