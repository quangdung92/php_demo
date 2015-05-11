<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
//User login
Route::post('user/login', array('before'=>'csrf', 'uses'=>'UserController@login'));

//User create
Route::get('register', 'UserController@index');
Route::post('user/create', array('before'=>'csrf', 'uses'=>'UserController@create'));

//Post
Route::get('post','PostController@index');
Route::post('post/create', array('before'=>'csrf', 'uses'=>'PostController@create'));

//Logout
Route::get('logout', 'UserController@destroy');

//Upload
Route::get('upload', 'ImageController@index');
Route::post('upload/create', array('before'=>'csrf', 'uses'=>'ImageController@create'));

//Oauth
Route::get('oauth','OauthController@index');
