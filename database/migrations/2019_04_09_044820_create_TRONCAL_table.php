<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTRONCALTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TRONCAL', function(Blueprint $table)
		{
			$table->integer('ID_TRONCAL', true);
			$table->string('NOMBRE_TRONCAL', 45);
			$table->string('TIPO_SERVICIO_TRONCAL', 45);
			$table->string('ORIGEN_TRONCAL', 45);
			$table->string('DESTINO_TRONCAL', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TRONCAL');
	}

}
