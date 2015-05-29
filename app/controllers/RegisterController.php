<?php

class RegisterController extends BaseController {

	/*
	--------------------------------------------------------------------------
	|	Register Controller
	--------------------------------------------------------------------------
	|  Controlador para el registro de usuario
	|
	|	Rutas:
	|		Route::get('/register', 'RegisterController@showUserRegister');
	|		Route::post('/register','RegisterController@registerUser');
	|	Métodos:
	|		showUserRegister()
	|		registerUser()
	|
	*/
	

	/*
	*  Función que muestra la vista para registrar a un nuevo usuario
	*/
	public function showRegister()
	{
		return View::make('welcome.register');
	}


	/*
	* Función que se encarga de validar los datos introducidos por el usuario y 
	* y registrarlo en el sistema.
	*/
	public function registerUser()
	{

		//Se crea un nuevo usuario y se obtienen los datos del formulario de registro
		$user = new User;
		$name = Input::get('name');
		$nickname = Input::get('nickname');
		$email = Input::get('email');
		$password = Input::get('password');
		$password_confirmation = Input::get('password_confirmation');

	
		/*
		* Se realizan validaciones para los campos del formulario
		* verificando que se cumpla lo establecido en la especificación de requisitos
		*/

		//Se valida que la contraseña sea correcta de acuerdo a la especificación
		Validator::extend('validPass', function($attribute, $value, $parameters)
		{
			if(preg_match('/[^0-9]/', $value) || preg_match('/^[a-zA-Z\d]+$/', $value) || substr($value, 0) == "_"){
				return false;
			}
		    return true;
		});

		//Se valida que el campo de apellido sea correcto.
		Validator::extend('validNickname', function($attribute, $value, $parameters)
		{
			$rexSafety = '/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#]+/i';
			$rexSafety2 = '/[0-9]/';
			if (preg_match($rexSafety, $value) or preg_match($rexSafety2, $value)) {
			    return false;
			}
			return true; 
		});

		//Se valida que el campo de nombre contenga valores válidos		
		Validator::extend('validName', function($attribute, $value, $parameters)
		{
			$rexSafety = '/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#]+/i';
			$rexSafety2 = '/[0-9]/';
			if (preg_match($rexSafety, $value) or preg_match($rexSafety2, $value)) {
			    return false;
			}
			return true; 
		});

		//Se valida que el valor en el campo de email sea un dato válido.
		Validator::extend('validEmail', function($attribute, $value, $parameters)
		{
			if($value[0] == "_"){
				return false;
			}
		    return true;
		});

		//Se crea un arreglo con los posibles mensajes de error a mostrar en la vista
		//en caso de que falle alguna validación
		$messages = array(
		    'nickname.validNickname' => 'Nickname no cumple las reglas de un nombre de usuario válido.',
		    'name.validName' => 'Nombre no cumple las reglas de un nombre válido.',
		    'password.validPass' => 'La contraseña no cumple con las reglas de una contraseña válida',
		    'email.validEmail' => 'El correo electrónico no cumple con las reglas de un correo electrónico válido'
		);

		//Se realizan las validaciones
		$validator = Validator::make(
		    array(
		    	'name' => $name, 
		    	'nickname' => $nickname, 
		    	'email' => $email, 
		    	'password' => $password, 
		    	'password_confirmation' => $password_confirmation
		    	),

		    array(
		    	'name' => 'required|min:1|validName|max:30', 
		    	'nickname' => 'required|min:1|validNickname|max:30', 
		    	'email' => 'required|email|validEmail|unique:users', 
		    	'password' => 'required|min:6|max:20|same:password_confirmation'
		    	),
		    $messages
		);

		//Se redirige a la vista de regitro con todos los campos excepto contraseña
		//en caso de que ocurra un error en la validación. Se regresa con los errores de validación

		if ($validator->fails())
	    {
	        return Redirect::back()->withInput(Input::except('password'))->withErrors($validator);
	    }
	    else{
	    	//Si la validación es correcta, se obtienen los datos del formulario y se registra exitosamente el usuario.
			$user -> name = Input::get('name');
			$user -> nickname = Input::get('nickname');
			$user -> email = Input::get('email');
			$user -> password = Hash::make(Input::get('password'));
			$user -> role = 'coder';
			$user -> save();

			
			return Redirect::to('login');
		}	
	}

}
