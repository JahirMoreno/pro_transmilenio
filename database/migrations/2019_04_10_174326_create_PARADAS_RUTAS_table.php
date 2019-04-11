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
			$table->integer('id', true);
			$table->integer('id_ruta')->index('PAR_FK_IDR');
			$table->integer('id_vagon')->index('PAR_FK_IDV');
			$table->string('nombre', 40);
			$table->string('posicion_x', 20);
			$table->string('posicion_y', 20);
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
