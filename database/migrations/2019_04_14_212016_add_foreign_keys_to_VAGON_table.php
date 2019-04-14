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
			$table->foreign('id_estacion', 'VAG_FK_IDE')->references('id')->on('ESTACION')->onUpdate('CASCADE')->onDelete('CASCADE');
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
			$table->dropForeign('VAG_FK_IDE');
		});
	}

}
