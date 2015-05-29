<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HapusKolomMd5LolNoob extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('barang', function(Blueprint $table)
		{
		    $table->dropColumn('md5');
		});
		Schema::table('users', function(Blueprint $table)
		{
			$table->string('md5');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
