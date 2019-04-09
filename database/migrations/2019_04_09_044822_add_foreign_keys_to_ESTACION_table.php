<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToESTACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ESTACION', function(Blueprint $table)
		{
			$table->foreign('ID_PORTAL', 'EST_FK_POR_IDP')->references('ID_PORTAL')->on('PORTAL')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TRONCAL', 'EST_FK_TRO_IDT')->references('ID_TRONCAL')->on('TRONCAL')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ESTACION', function(Blueprint $table)
		{
			$table->dropForeign('EST_FK_POR_IDP');
			$table->dropForeign('EST_FK_TRO_IDT');
		});
	}

}
