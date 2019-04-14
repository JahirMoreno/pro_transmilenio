<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateESTACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ESTACION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_portal')->index('EST_FK_IDP');
			$table->integer('id_troncal')->index('EST_FK_IDT');
			$table->string('nombre', 45);
			$table->string('longitud', 14);
			$table->string('latitud', 14);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ESTACION');
	}

}
