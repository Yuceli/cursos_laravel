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
    $user = Auth::user();
    if($user->role == 'admin'){
        $courses = Workshop::paginate(10);
        return View::make('workshops.admin',compact('courses'));
    }
    else{
        $subscribed  = $user->workshops;
        $unsuscribed = Workshop::all()->diff($subscribed);
        return View::make('workshops.coder',compact('subscribed','unsuscribed'));
    }
}

/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//cargamos el formulario creado en (app/views/workshops/crate.blade.php)
    return View::make('workshops.create');
}

/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
//validaciones
    $rules = array(
        'title' => 'required',
        'description' => 'required'
        );

    $validator = Validator::make(Input::all(), $rules);

//Se procesa login
    if($validator->fails()){
        return Redirect::to('workshos/crate')->withErrors($validator);
    } else {
//se guarda taller en BD
        $workshop = new Workshop;
        $workshop->title = Input::get('title');
        $workshop->description = Input::get('description');
        $workshop->begin_date = Input::get('begin_date');
        $workshop->end_date = Input::get('end_date');
        $workshop->save();

        Session::flash('message', 'Taller creado con éxito');
        return Redirect::to('workshops');

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
//obtenemos los detalles del un taller
    $workshop = Workshop::find($id);

//mostramos la vista y pasamos el taller
    return View::make('workshops.show')->with('workshop', $workshop);

}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
//obtenemos el taller a editar
    $workshop = Workshop::find($id);

//mostramos el formulario de edición y le pasamos los datos del taller
    return View::make('workshops.edit')->with('workshop', $workshop);
}

/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
//validaciones
    $rules = array (
        'description' => 'required',
        'title' => 'required'
        );
    $validator = Validator::make(Input::all(), $rules);

//procesamos
    if($validator->fails()){
        return Redirect::to('workshops' .$id. '/edit')->withErrors($validator);
    }
    else{
        $workshop = Workshop::find($id);
        $workshop->title = Input::get('title');
        $workshop->description = Input::get('description');
        $workshop->begin_date = Input::get('begin_date');
        $workshop->end_date = Input::get('end_date');
        $workshop->save();

//redireccionamos
        Session::flash('message', 'Cambios guardados con éxito');
        return Redirect::to('workshops');
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
//eliminar taller
    $workshop = Workshop::find($id);
    $workshop->delete();

    Session::flash('message', 'Taller eliminado con exito');
    return Redirect::to('workshops');
}

public function sign($ws_id){
    $user = Auth::user();
    $uws = new UserWorkshop();
    $uws->user_id = $user->id;
    $uws->workshop_id = $ws_id;
    $uws->save();
    return Redirect::to('workshops');
}

public function quit($ws_id){
    $user_id = Auth::user();
    $uws = DB::table('user_workshop')->where('user_id',$user_id->id)->where('workshop_id',$ws_id)->delete();
    return Redirect::to('workshops');
}
}