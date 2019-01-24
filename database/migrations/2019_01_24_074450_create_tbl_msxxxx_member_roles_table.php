<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMsxxxxMemberRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_msxxxx_member_roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('msxxxx_role_code', 100);
			$table->string('msxxxx_member_id', 100);
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
		Schema::drop('tbl_msxxxx_member_roles');
	}

}
