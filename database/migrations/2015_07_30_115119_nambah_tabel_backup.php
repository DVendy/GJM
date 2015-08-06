<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NambahTabelBackup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barang_backup', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('itemcode');
			$table->string('name');
			$table->string('itemname');
			$table->string('model');
			$table->string('registrasi');
			$table->string('kurs');
			$table->decimal('price', 10, 2);
			$table->timestamps();
			$table->datetime('lastupdate');
			$table->text('spec');
			$table->string('merek');
			$table->datetime('expired');
			$table->integer('status');
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
