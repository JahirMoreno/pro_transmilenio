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
			$table->foreign('id_estacion', 'EMP_FK_IDE')->references('id')->on('ESTACION')->onUpdate('CASCADE')->onDelete('CASCADE');
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
			$table->dropForeign('EMP_FK_IDE');
		});
	}

}
