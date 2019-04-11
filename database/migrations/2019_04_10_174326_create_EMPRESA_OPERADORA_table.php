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
			$table->integer('id', true);
			$table->integer('id_estacion')->index('EMP_FK_IDE');
			$table->string('nombre', 20);
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
