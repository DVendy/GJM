<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_H extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'login_history';

	/*
		News Properties belongs here.....
	*/
	protected $fillable = ['date', 'users_id'];

	public function user() {
        return $this->belongsTo('User');
    }
}
