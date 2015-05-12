<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'FrontController@index');

//--- Administrator
Route::get('/', 'BackController@index');
Route::get('user', 'BackController@user');

Route::get('product', 'BackController@product');
Route::post('product', 'BackController@import');

Route::get('news', 'BackController@news');


//--- Login
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@doLogin');
Route::get('logout', 'AuthController@doLogout');


//--- API