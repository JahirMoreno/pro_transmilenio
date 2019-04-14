<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHORARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('HORARIO', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('fecha');
			$table->time('hora_inicio');
			$table->time('hora_fin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('HORARIO');
	}

}
