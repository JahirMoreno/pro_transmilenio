<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRUTAASIGNADABUSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RUTA_ASIGNADA_BUS', function(Blueprint $table)
		{
			$table->integer('ID_RUTA')->index('RUTBUS_FK_RUT_IDRUT');
			$table->integer('ID_TIPO_BUS')->index('RUTBUS_FK_TIP_IDTIP');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RUTA_ASIGNADA_BUS');
	}

}
