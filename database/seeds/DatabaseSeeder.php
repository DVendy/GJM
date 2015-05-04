<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('TableSeeder');
	}

}


/**
* 
*/

class TableSeeder extends Seeder {

    public function run()
	{
		$user = new User;
		$user->name 		= 'Administrator';
		$user->username 	= 'admin';
		$user->password 	= Hash::make('1234');
		$user->role 		= 'admin';
		$user->save();
	}
}