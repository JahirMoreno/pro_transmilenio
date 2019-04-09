<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRUTATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RUTA', function(Blueprint $table)
		{
			$table->integer('ID_RUTA', true);
			$table->string('NOMBRE_RUTA', 50);
			$table->string('ESTADO_RUTA', 25);
			$table->integer('LONGITUD_RUTA');
			$table->string('TIPO_SERVICIO_RUTA', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RUTA');
	}

}
