<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRUTAASIGNADABUSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('RUTA_ASIGNADA_BUS', function(Blueprint $table)
		{
			$table->foreign('ID_RUTA', 'RUTBUS_FK_RUT_IDRUT')->references('ID_RUTA')->on('RUTA')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TIPO_BUS', 'RUTBUS_FK_TIP_IDTIP')->references('ID_TIPO_BUS')->on('TIPO_BUS')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('RUTA_ASIGNADA_BUS', function(Blueprint $table)
		{
			$table->dropForeign('RUTBUS_FK_RUT_IDRUT');
			$table->dropForeign('RUTBUS_FK_TIP_IDTIP');
		});
	}

}
