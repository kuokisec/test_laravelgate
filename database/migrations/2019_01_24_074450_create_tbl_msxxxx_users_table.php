<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMsxxxxUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_msxxxx_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('login_name', 32)->nullable();
			$table->string('email')->unique('users_email_unique');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->string('role')->default('0')->index('index_role')->comment('ロール');
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('tbl_msxxxx_users');
	}

}
