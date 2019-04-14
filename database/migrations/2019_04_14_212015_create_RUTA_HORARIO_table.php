<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRUTAHORARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RUTA_HORARIO', function(Blueprint $table)
		{
			$table->integer('id_horario')->index('RUH_FK_IDH');
			$table->integer('id_ruta')->index('RUH_FK_IDR');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RUTA_HORARIO');
	}

}
