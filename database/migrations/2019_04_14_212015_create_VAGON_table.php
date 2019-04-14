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
			$table->integer('id', true);
			$table->integer('id_estacion')->index('VAG_FK_IDE');
			$table->string('nombre', 30);
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
