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
	return View::make('hello');
});

Route::get('login', function()
{
	return View::make('user.login');
});

Route::post('/auth/login','UserController@login');

Route::resource('user', 'UserController');

Route::resource('workshops','WorkshopController');

Route::get('workshops/sign/{ws_id}','WorkshopController@sign');

Route::get('workshops/quit/{ws_id}','WorkshopController@quit');