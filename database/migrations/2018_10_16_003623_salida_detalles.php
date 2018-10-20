<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalidaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('salida_detalles', function (Blueprint $table) {
                    $table->increments('id_salidadet');
					$table->integer('cantidad');
					$table->integer('id_salida')->unsigned();
				    $table->foreign('id_salida')->references('id_salida')->on('salidas');
					$table->integer('id_producto')->unsigned();
				    $table->foreign('id_producto')->references('id_producto')->on('alm_productos');
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
        Schema::drop('salida_detalles');
    }
}
