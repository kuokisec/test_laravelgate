<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMsxxxxDomainMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_msxxxx_domain_members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('msxxxx_domain_code', 100);
			$table->string('msxxxx_member_id', 100);
			$table->string('msxxxx_login_name', 100);
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
		Schema::drop('tbl_msxxxx_domain_members');
	}

}
