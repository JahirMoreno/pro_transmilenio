<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRUTATIPOBUSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RUTA_TIPO_BUS', function(Blueprint $table)
		{
			$table->integer('id_ruta');
			$table->integer('id_tipo_bus');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RUTA_TIPO_BUS');
	}

}
