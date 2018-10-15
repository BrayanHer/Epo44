<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Alumnos extends Migration
    {
        public function up() 
        {
            Schema::create('alumnos',function(Blueprint $table)
            {
                $table->increments('IdMatricula');         
                $table->string('Nombre',50);
                $table->string('APaterno',50);
                $table->string('AMaterno',50);
                $table->integer('Edad');
                $table->string('Sexo',5);
                $table->date('FechaNac');
                $table->integer('Celular');
                $table->integer('TelFijo');
                $table->string('Email',50);
                $table->string('Calle',50);
                $table->string('NumInt',100);
                $table->string('NumExt',15);
                $table->integer('CodigoPostal');  
                $table->string('Estado',50);

                $table->integer('IdMun')->unsigned();
                $table->foreign('IdMun')->references('IdMun')->on('municipios');

                $table->integer('IdLoc')->unsigned();
                $table->foreign('IdLoc')->references('IdLoc')->on('localidades');

                $table->string('NombrePadre',50);
                $table->string('APPadre',50);
                $table->string('AMPadre',50);
                $table->integer('CelularPadre');
                $table->string('NombreMadre',50);
                $table->string('APMadre',50);
                $table->string('AMMadre',50);
                $table->integer('CelularMadre');
                $table->string('Curp',50);
                $table->string('ActNacimiento',50);
                $table->string('FolioAsignado',50);
                $table->string('SecProcedencia',50);
                $table->string('CertificadoSec',50);

                $table->rememberToken();
                $table->timestamps();
            }); 
        }

        public function down()
        {
            Schema::drop('alumnos');
        }
    }