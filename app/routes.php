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



// route to show the login form
Route::get('login', 'UserController@showLogin');

// route to process the form
Route::post('login', 'UserController@doLogin');

Route::get('logout', 'UserController@doLogout');


/*Ruta privada solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
	Route::resource('user', 'UserController');
});
