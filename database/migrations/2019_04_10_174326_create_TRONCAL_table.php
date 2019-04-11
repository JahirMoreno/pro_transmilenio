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
			$table->integer('id', true);
			$table->string('nombre', 45);
			$table->string('tipo_servicio', 45);
			$table->string('origen', 45);
			$table->string('destino', 45);
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
