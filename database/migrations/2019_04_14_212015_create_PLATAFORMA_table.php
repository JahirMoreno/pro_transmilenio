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
			$table->integer('id', true);
			$table->integer('id_portal')->index('PLA_FK_IDP');
			$table->string('nombre', 45);
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
