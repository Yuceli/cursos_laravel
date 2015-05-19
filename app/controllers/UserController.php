<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();

		return View::make('user.index')->with('user', $user);
	}


	    public function showLogin()
	{
	    // show the form
	    return View::make('login');
	}

	public function doLogin()
	{
	  
      // validate the info, create rules for the inputs
		$rules = array(
    		'email'    => 'required|email', // make sure the email is an actual email
    		'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    );

	    // run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {

    // create our user data for the authentication
    	$userdata = array(
    		'email'     => Input::get('email'),
    		'password'  => Input::get('password')
    		);

    // attempt to do the login
    	if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
    		echo 'SUCCESS!';

    	} else {        

        // validation not successful, send back to form 
    		return Redirect::to('login');

    	}

    }

}


	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}







	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array (
			'name'  => 'required',
			'email' => 'required|email',
			'level' => 'required|numeric'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('user/create')->withErrors($validator)->withInput(Input::except('password'));
		}
		else{
			$user = new User;
			$user->name   = Input::get('name');
			$user->email  = Input::get('email');
			$user->level  = Input::get('level');
			$user->save();

			Session::flash('message', 'Usuario creado con exito');
			return Redirect::to('user');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('user.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name'  => 'required',
			'email' => 'required|email',
			'level' => 'required|numeric'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('user/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
 		}else
 		{
 			$user = User::find($id);
 			$user->name   = Input::get('name');
 			$user->email  = Input::get('email');
 			$user->level  = Input::get('level');
 			$user->save();

 			Session::flash('message', 'Los cambios han sido guardados');
 			return Redirect::to('user');
 		}

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		Session::flash('message', 'Usuario eliminado con exito');
		return Redirect::to('user');
	}




}
