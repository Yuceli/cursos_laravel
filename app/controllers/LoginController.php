<?php

class LoginController extends BaseController {


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
			if(Auth::user()->role=='admin'){
				return Redirect::intended('/user');				
			}
			return Redirect::to('workshops');
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


}