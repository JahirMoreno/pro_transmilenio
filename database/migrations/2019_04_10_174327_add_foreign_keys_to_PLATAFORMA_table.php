<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPLATAFORMATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PLATAFORMA', function(Blueprint $table)
		{
			$table->foreign('id_portal', 'PLA_FK_IDP')->references('id')->on('PORTAL')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PLATAFORMA', function(Blueprint $table)
		{
			$table->dropForeign('PLA_FK_IDP');
		});
	}

}
