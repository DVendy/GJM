<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'upload';

	protected $fillable = ['name', 'date'];
}
