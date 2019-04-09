<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePARADASRUTASTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PARADAS_RUTAS', function(Blueprint $table)
		{
			$table->integer('ID_PARADAS_RUTAS', true);
			$table->integer('ID_RUTA')->index('PAR_FK_RUT_IDR');
			$table->integer('ID_VAGON')->index('PAR_FK_VAG_IDV');
			$table->string('NOMBRE_PARADAS_RUTAS', 40);
			$table->string('POSICION_X', 20);
			$table->string('POSICION_Y', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PARADAS_RUTAS');
	}

}
