<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTIPOBUSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TIPO_BUS', function(Blueprint $table)
		{
			$table->integer('ID_TIPO_BUS', true);
			$table->string('NOMBRE_TIPO_BUS', 20);
			$table->integer('CAPACIDAD_TIPO_BUS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TIPO_BUS');
	}

}
