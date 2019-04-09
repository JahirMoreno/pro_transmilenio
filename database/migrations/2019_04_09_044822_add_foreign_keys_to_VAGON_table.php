<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVAGONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('VAGON', function(Blueprint $table)
		{
			$table->foreign('ID_ESTACION', 'VAG_FK_EST_IDE')->references('ID_ESTACION')->on('ESTACION')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('VAGON', function(Blueprint $table)
		{
			$table->dropForeign('VAG_FK_EST_IDE');
		});
	}

}
