<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Logins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
                    $table->increments('id_login');
					$table->string('nombre_usuario',40);
					$table->string('correo',100);
					$table->string('password',40);
					$table->string('nombre',40);
					$table->string('tipo',10);
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
        Schema::drop('logins');
    }
}
