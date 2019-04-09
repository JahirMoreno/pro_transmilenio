<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEMPRESAOPERADORATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EMPRESA_OPERADORA', function(Blueprint $table)
		{
			$table->foreign('ID_ESTACION', 'EMP_FK_EST_IDE')->references('ID_ESTACION')->on('ESTACION')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EMPRESA_OPERADORA', function(Blueprint $table)
		{
			$table->dropForeign('EMP_FK_EST_IDE');
		});
	}

}
