<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libros extends Migration
{
    public function up()
    {
        Schema::create('libros',function(Blueprint $table)
        {
          $table->increments('IdLibro');
          $table->string('Titulo',40);


          $table->integer('IdAutor')->unsigned();
          $table->foreign('IdAutor')->references('IdAutor')->on('autores');

          $table->integer('IdEditorial')->unsigned();
          $table->foreign('IdEditorial')->references('IdEditorial')->on('editoriales');
          
          $table->string('Edicion',40);
          $table->date('AnoPublicacion');

          $table->integer('IdCategoria')->unsigned();
          $table->foreign('IdCategoria')->references('IdCategoria')->on('categorias');
          

          $table->rememberToken();
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('libros');
    }
}
