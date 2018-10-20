<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlmProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('alm_productos', function (Blueprint $table) {
                    $table->increments('id_producto');
					$table->string('producto',40);
					$table->integer('cantidad_minima');
					$table->double('costo');
					$table->double('costo_promedio');
					$table->integer('existencia_actual');
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
       Schema::drop('alm_productos');
    }
}
