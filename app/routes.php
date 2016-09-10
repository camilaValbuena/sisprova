<?php
Route::get('/', function()
{
	return View::make('login');
});

Route::post('ingresar', 'LoginController@uservalidate');

// GRUPO DE RUTAS A LAS QUE PUEDE ACCEDER EL USUARIO UNA VEZ LOGEADO
Route::group(array('prefix' => '/', 'before' => 'auth'), function(){

// PAGINA DE INICIO - DASHBOARD
Route::get('index', function(){
	return View::make('index');
});
// FIN PAGINA DE INICIO - DASHBOARD

// CRUD EQUIPOS
Route::get('equipos', 'EquiposController@listar');
Route::get('equipos/ingresar', 'EquiposController@formulario');
Route::post('equipos/ingresar', 'EquiposController@crear');
Route::get('equipos/inhabilitar/{id}', 'EquiposController@inhabilitar');
Route::get('equipos/habilitar/{id}', 'EquiposController@habilitar');
Route::get('equipos/editar/{id}', 'EquiposController@obtener');
Route::post('equipos/editar/{id}', 'EquiposController@editar');
// FIN CRUD EQUIPOS

//CRUD MARCAS
Route::get('marcas', 'MarcasController@listar' );
Route::post('marcas/ingresar', 'MarcasController@crear');
Route::get('marcas/eliminar/{id}', 'MarcasController@eliminar');
Route::get('marcas/habilitar/{id}', 'MarcasController@habilitar');
Route::get('marcas/editar/{id}', 'MarcasController@obtener');
Route::post('marcas/editar/{id}', 'MarcasController@editar');
// FIN CRUD MARCAS

//CRUD ROLES
Route::get('roles', 'RolesController@listar');
Route::get('roles/ingresar', 'RolesController@formulario');
Route::post('roles/ingresar', 'RolesController@crear');
Route::get('roles/inhabilitar/{id}', 'RolesController@inhabilitar');
Route::get('roles/habilitar/{id}', 'RolesController@habilitar');
Route::get('roles/editar/{id}', 'RolesController@obtener');
Route::post('roles/editar/{id}', 'RolesController@editar');
// FIN CRUD ROLES


// LOGOUT SESSION DE USUARIO
Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/');
});
// FIN LOGOUT SESSION DE USUARIO

});
// FIN GRUPO DE RUTAS A LAS QUE PUEDE ACCEDER EL USUARIO UNA VEZ LOGEADO
?>