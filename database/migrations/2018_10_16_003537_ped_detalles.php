<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ped_detalles', function (Blueprint $table) {
                    $table->increments('id_pedidodet');
					$table->double('precio');
					$table->string('tamaño');
					$table->date('descripcion');
					$table->integer('id_pedido')->unsigned();
				    $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
					$table->integer('id_casa')->unsigned();
                    $table->foreign('id_casa')->references('id_casa')->on('descripcion_casas');
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
        Schema::drop('ped_detalles');
    }
}
