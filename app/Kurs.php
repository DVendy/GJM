<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurs extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'kurs';

	/*
		News Properties belongs here.....
	*/
	protected $fillable = ['code', 'name', 'index'];
}
