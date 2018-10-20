<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntradaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('entrada_detalles', function (Blueprint $table) {
                    $table->increments('id_entradadet');
					$table->integer('cantidad');
					$table->double('precio_compra');
					$table->integer('id_entrada')->unsigned();
				    $table->foreign('id_entrada')->references('id_entrada')->on('entradas');
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
         Schema::drop('entrada_detalles');
    }
}
