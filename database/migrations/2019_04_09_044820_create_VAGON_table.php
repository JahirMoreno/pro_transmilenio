<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVAGONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('VAGON', function(Blueprint $table)
		{
			$table->integer('ID_VAGON', true);
			$table->integer('ID_ESTACION')->index('VAG_FK_EST_IDE');
			$table->string('NOMBRE_VAGON', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('VAGON');
	}

}
