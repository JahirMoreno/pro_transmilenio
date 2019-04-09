<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCUMPLEHORARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CUMPLE_HORARIO', function(Blueprint $table)
		{
			$table->integer('ID_HORARIO')->index('CUMHOR_FK_HOR_IDHOR');
			$table->integer('ID_RUTA')->index('CUMHOR_FK_RUTA_IDRUTA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CUMPLE_HORARIO');
	}

}
