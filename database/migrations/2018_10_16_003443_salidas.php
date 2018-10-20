<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
                    $table->increments('id_salida');
					$table->date('fecha_salida');
					$table->string('responsable');
					$table->integer('id_usuario')->unsigned();
				    $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('salidas');
    }
}
