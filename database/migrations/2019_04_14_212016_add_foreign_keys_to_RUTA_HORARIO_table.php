<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRUTAHORARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('RUTA_HORARIO', function(Blueprint $table)
		{
			$table->foreign('id_horario', 'RUH_FK_IDH')->references('id')->on('HORARIO')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_ruta', 'RUH_FK_IDR')->references('id')->on('RUTA')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('RUTA_HORARIO', function(Blueprint $table)
		{
			$table->dropForeign('RUH_FK_IDH');
			$table->dropForeign('RUH_FK_IDR');
		});
	}

}
