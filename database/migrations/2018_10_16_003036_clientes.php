<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
                    $table->increments('id_cliente');
					$table->string('nombre',40);
					$table->string('apellidos',40);
					$table->string('direccion',40);
					$table->integer('cp');
					$table->integer('tel');
					$table->string('correo',100);
					$table->string('activo',2);
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
         Schema::drop('clientes');
    }
}
