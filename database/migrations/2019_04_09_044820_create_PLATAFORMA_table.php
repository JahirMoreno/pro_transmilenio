<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePLATAFORMATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PLATAFORMA', function(Blueprint $table)
		{
			$table->integer('ID_PLATAFORMA', true);
			$table->integer('ID_PORTAL')->index('PLA_FK_POR_IDP');
			$table->string('NOMBRE_PLATAFORMA', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PLATAFORMA');
	}

}
