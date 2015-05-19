<?php

class WorkshopController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$user = User::first(); // fakes an authenticated user CHANGE!!
		$subscribed  = $user->workshops;
		$unsuscribed = Workshop::all()->diff($subscribed);
		return View::make('workshop.index',compact('subscribed','unsuscribed'));
	}

	public function sign($ws_id){
		$user = User::first();
		$uws = new UserWorkshop();
		$uws->user_id = $user->id;
		$uws->workshop_id = $ws_id;
		$uws->save();
		return Redirect::to('workshops');
	}

	public function quit($ws_id){
		$user_id = User::first();
		$uws = DB::table('user_workshop')->where('user_id',$user_id->id)->where('workshop_id',$ws_id)->delete();
		return Redirect::to('workshops');
	}

}
