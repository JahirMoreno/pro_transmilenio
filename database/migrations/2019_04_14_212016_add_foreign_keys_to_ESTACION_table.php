<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToESTACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ESTACION', function(Blueprint $table)
		{
			$table->foreign('id_portal', 'EST_FK_IDP')->references('id')->on('PORTAL')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_troncal', 'EST_FK_IDT')->references('id')->on('TRONCAL')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ESTACION', function(Blueprint $table)
		{
			$table->dropForeign('EST_FK_IDP');
			$table->dropForeign('EST_FK_IDT');
		});
	}

}
