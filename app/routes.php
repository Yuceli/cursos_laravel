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
	return View::make('welcome.landing');
});

Route::get('register', 'RegisterController@showRegister');

Route::post('register','RegisterController@registerUser');

Route::get('login',  'LoginController@showLogin');

Route::post('login', 'LoginController@doLogin');

Route::get('logout', 'LoginController@doLogout');

Route::when('*', 'csrf', array('post', 'put', 'delete'));

/*Ruta privada solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
	Route::resource('user', 'UserController');
	Route::resource('workshops', 'WorkshopController');
	Route::get('/quit/{ws_id}','WorkshopController@quit');
	Route::get('/sign/{ws_id}','WorkshopController@sign');
});