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
			$table->integer('id', true);
			$table->string('nombre', 20);
			$table->integer('capacidad');
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
