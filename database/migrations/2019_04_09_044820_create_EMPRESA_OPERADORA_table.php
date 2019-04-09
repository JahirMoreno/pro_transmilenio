<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEMPRESAOPERADORATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EMPRESA_OPERADORA', function(Blueprint $table)
		{
			$table->integer('ID_EMPRESA_OPERADORA', true);
			$table->integer('ID_ESTACION')->index('EMP_FK_EST_IDE');
			$table->string('NOMBRE_EMPRESA_OPERADORA', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('EMPRESA_OPERADORA');
	}

}
