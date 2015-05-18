<?php
use App\News;
use App\User;
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

//Product
Route::get('product', 'BackController@product');
Route::post('product', 'BackController@product');

Route::get('export', 'BackController@export');
Route::post('import', 'BackController@import_new');
Route::get('/processing-status', function()
{
    return Session::get('progress');
});

//News
Route::get('news', 'BackController@news');
Route::post('news', 'BackController@news_create');
Route::post('news/edit', 'BackController@news_edit');
Route::get('/news/{id}/id', function($id)
{
    return News::find($id)->id;
});
Route::get('/news/{id}/title', function($id)
{
    return News::find($id)->title;
});
Route::get('/news/{id}/body', function($id)
{
    return News::find($id)->body;
});
Route::get('news/delete-{id}', 'BackController@news_delete');

//User
Route::get('user', 'BackController@user');
Route::post('user_create', 'BackController@user_create');
Route::post('user_update', 'BackController@user_update');
Route::get('/user/{id}/id', function($id)
{
    return User::find($id)->id;
});
Route::get('/user/{id}/username', function($id)
{
    return User::find($id)->username;
});
Route::get('/user/{id}/password', function($id)
{
    return User::find($id)->password;
});
Route::get('/user/{id}/name', function($id)
{
    return User::find($id)->name;
});
Route::get('/user/{id}/email', function($id)
{
    return User::find($id)->email;
});
Route::get('/user/{id}/phone', function($id)
{
    return User::find($id)->hp;
});
Route::get('user/delete-{id}', 'BackController@user_delete');

//--- Login
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@doLogin');
Route::get('logout', 'AuthController@doLogout');


//--- API