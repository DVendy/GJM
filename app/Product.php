<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'barang';

	/*
		Product Properties belongs here.....
	*/
	protected $fillable = ['itemcode', 'name', 'itemname', 'model', 'registrasi', 'kurs', 'price', 'created_at', 'updated_at', 'lastupdate', 'spec', 'merek', 'expired', 'status'];
}
