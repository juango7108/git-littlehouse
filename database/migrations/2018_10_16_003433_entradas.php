<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
                    $table->increments('id_entrada');
					$table->date('fecha_entrada');
					$table->string('proveedor');
					$table->integer('folio_factura');
				    $table->date('fecha_factura');
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
        Schema::drop('entradas');
    }
}
