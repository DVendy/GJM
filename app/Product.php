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
	protected $fillable = ['itemcode', 'description', 'itemname', 'model', 'spec', 'registrasi', 'kurs', 'price', 'lastupdate', 'created_at'];
}
