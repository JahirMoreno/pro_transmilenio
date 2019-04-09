<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPARADASRUTASTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PARADAS_RUTAS', function(Blueprint $table)
		{
			$table->foreign('ID_RUTA', 'PAR_FK_RUT_IDR')->references('ID_RUTA')->on('RUTA')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_VAGON', 'PAR_FK_VAG_IDV')->references('ID_VAGON')->on('VAGON')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PARADAS_RUTAS', function(Blueprint $table)
		{
			$table->dropForeign('PAR_FK_RUT_IDR');
			$table->dropForeign('PAR_FK_VAG_IDV');
		});
	}

}
