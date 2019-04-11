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
			$table->foreign('id_ruta', 'PAR_FK_IDR')->references('id')->on('RUTA')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_vagon', 'PAR_FK_IDV')->references('id')->on('VAGON')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('PAR_FK_IDR');
			$table->dropForeign('PAR_FK_IDV');
		});
	}

}
