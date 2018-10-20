<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DescripcionCasas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('descripcion_casas', function (Blueprint $table) {
                    $table->increments('id_casa');
					$table->string('dimenciones');
					$table->string('color');
					$table->string('descripcion',50);
					$table->string('archivo',200);
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
        Schema::drop('descripcion_casas');
    }
}
