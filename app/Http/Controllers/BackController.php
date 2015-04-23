<?php namespace App\Http\Controllers;

use Theme;

class BackController extends Controller {

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

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin');
	}

	/**
	 * Dashboard
	 *
	 * @return void
	 */
	public function index()
	{
		return Theme::back('index');
	}

	/**
	 * User
	 *
	 * @return void
	 */
	public function user()
	{
		return Theme::back('user');
	}

	/**
	 * Product
	 *
	 * @return void
	 */
	public function product()
	{
		return Theme::back('product');
	}
	/**
	 * News
	 *
	 * @return void
	 */
	public function news()
	{
		return Theme::back('news');
	}

}
