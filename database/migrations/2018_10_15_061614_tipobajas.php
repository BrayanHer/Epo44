<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Tipobajas extends Migration
    {
        public function up()
        {
            Schema::create('tipoBajas',function(Blueprint $table)
            {
                $table->increments('IdTipoBaja');
                $table->string('Tipo',50);
                $table->rememberToken();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::drop('tipoBajas');
        }
    }