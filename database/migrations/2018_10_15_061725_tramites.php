<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Tramites extends Migration
    {
        public function up()
        {
            Schema::create('tramites',function(Blueprint $table)
            {
                $table->increments('IdTramites');
                $table->string('Tramite',50);
                $table->rememberToken();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::drop('tramites');
        }
    }