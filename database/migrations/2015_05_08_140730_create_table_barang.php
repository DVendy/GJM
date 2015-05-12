<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_code');
			$table->string('nama');
			$table->string('merek');
			$table->string('model');
			$table->string('spec');
			$table->string('registrasi');
			$table->string('kurs');
			$table->decimal('price', 10, 2);
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
		//
	}

}
