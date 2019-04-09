<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePORTALTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PORTAL', function(Blueprint $table)
		{
			$table->integer('ID_PORTAL', true);
			$table->string('NOMBRE_PORTAL', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PORTAL');
	}

}
