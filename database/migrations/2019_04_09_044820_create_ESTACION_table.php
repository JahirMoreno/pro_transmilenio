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
			$table->integer('ID_ESTACION', true);
			$table->integer('ID_PORTAL')->index('EST_FK_POR_IDP');
			$table->integer('ID_TRONCAL')->index('EST_FK_TRO_IDT');
			$table->string('NOMBRE_ESTACION', 45);
			$table->string('LONGITUD_ESTACION', 14);
			$table->string('LATITUD_ESTACION', 14);
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
