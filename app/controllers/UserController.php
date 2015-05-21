<?php

class UserController extends \BaseController {

	public function showLogin()
	{   
		//Verificamos si hay sesión activa
		if(Auth::check()){
			//Si tenemos sesión activa mostrará la página para inscribirse a los talleres
			return Redirect::to('/user');
		}

	    //Si no hay sesión activa mostramos fomulario de login
	    return View::make('login');
	}

	public function doLogin()
	{

		//Obtenemos los datos del formulario
		$data = [
		      'nickname' => Input::get('nickname'),
		      'password' => Input::get('password')
		];

		//Verificamos los datos
		if(Auth::attempt($data, Input::get('remember')))
		{
			//Si nuestros datos son correctos mostramos la página de inscripción
			return Redirect::intended('/user');
		}

		//Si los datos no son los correctos volvemos al login y mostramos los errores
		return Redirect::back()->with('error_message', 'Invalid data')->withInput();
      
    }

	public function doLogout()
	{   
		//Cerramos la sesión
	    Auth::logout();

	    //Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
	    return Redirect::to('login')->with('error_message', 'Sesión cerrada correctamente'); 
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();

		return View::make('users.index')->with('user', $user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
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
			'nickname' => 'required',
			'password' => 'required',
			'email' => 'required|email',
			'level' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('users/create')->withErrors($validator)->withInput(Input::except('password'));
		}
		else{
			$user = new User;
			$user->name   = Input::get('name');
			$user->nickname   = Input::get('nickname');
			$user->password   = Hash::make(Input::get('password'));
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
		$user = user::find($id);
		return View::make('users.show')->with('user', $user);
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
		return View::make('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array (
			'name'  => 'required',
			'nickname' => 'required',
			'password' => 'required',
			'email' => 'required|email',
			'level' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('user/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
 		}else
 		{
 			$user = User::find($id);
 			$user->name   = Input::get('name');
 			$user->nickname   = Input::get('nickname');
 			$user->password  = Hash::make(Input::get('password'));
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
