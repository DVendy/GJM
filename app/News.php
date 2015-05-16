<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	/*
		News Properties belongs here.....
	*/
	protected $fillable = ['title', 'body', 'date'];
}
