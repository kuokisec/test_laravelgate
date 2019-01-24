<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMsxxxxDomainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_msxxxx_domains', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('msxxxx_domain_code', 100);
			$table->string('msxxxx_domain_name', 100);
			$table->integer('msxxxx_shop_code');
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
		Schema::drop('tbl_msxxxx_domains');
	}

}
