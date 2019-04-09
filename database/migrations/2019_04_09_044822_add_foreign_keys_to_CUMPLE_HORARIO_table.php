<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCUMPLEHORARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('CUMPLE_HORARIO', function(Blueprint $table)
		{
			$table->foreign('ID_HORARIO', 'CUMHOR_FK_HOR_IDHOR')->references('ID_HORARIO')->on('HORARIO_RUTA')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_RUTA', 'CUMHOR_FK_RUTA_IDRUTA')->references('ID_RUTA')->on('RUTA')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('CUMPLE_HORARIO', function(Blueprint $table)
		{
			$table->dropForeign('CUMHOR_FK_HOR_IDHOR');
			$table->dropForeign('CUMHOR_FK_RUTA_IDRUTA');
		});
	}

}
