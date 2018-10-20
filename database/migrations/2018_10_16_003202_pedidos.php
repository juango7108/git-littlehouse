<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
                    $table->increments('id_pedido');
					$table->string('direccion',40);
					$table->date('fecha_pedido');
					$table->date('fecha_entrega');
					$table->integer('id_cliente')->unsigned();
				    $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
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
        Schema::drop('pedidos');
    }
}
