<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHORARIORUTATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('HORARIO_RUTA', function(Blueprint $table)
		{
			$table->integer('ID_HORARIO', true);
			$table->date('FECHA_HORARIO');
			$table->time('HORA_INICIO_HORARIO');
			$table->time('HORA_FIN_HORARIO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('HORARIO_RUTA');
	}

}
