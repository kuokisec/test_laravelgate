<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMsxxxxRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_msxxxx_roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('msxxxx_role_code', 100);
			$table->integer('msxxxx_role_rank')->default(0);
			$table->string('msxxxx_policy_code', 100);
			$table->string('msxxxx_permission_code', 100);
			$table->boolean('msxxxx_available_falg')->nullable()->default(1);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_msxxxx_roles');
	}

}
