<?php namespace App\Http\Controllers;

//Module
use Auth;

//Theme configurator
use Theme;

//Request handler
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use App\Login_H;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/*
	 * Show Login form.
	 */
	public function showLogin()
	{
		return Theme::back('login');
	}

	/*
	 * Do Login from submitted form.
	 */
	public function doLogin(LoginRequest $request)
	{
		$remember = false;
		if($request->input('remember')=='yes')
			$remember = true;

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')], $remember))
        {
        	$login_h = new Login_H();
        	$login_h->date = Carbon::now();
        	$login_h->users_id = Auth::user()->id;
        	$login_h->save();
            return redirect(action('BackController@index'));
        }

        return redirect(action('AuthController@showLogin'))->withErrors('Wrong username or password');
	}

	/*
	 * Do logout.
	 */
	public function doLogout()
	{
		Auth::logout();
        return redirect(action('AuthController@showLogin'))->withMessages('Logged out..');
	}

	public function editProfile(){
		return Theme::back('user_edit');
	}

}
