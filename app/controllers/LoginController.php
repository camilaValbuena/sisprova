<?php

class LoginController extends BaseController{

	public function uservalidate(){

		$usuario = [
			'numero_documento' => Input::get('usuario'),
			'password' => Input::get('clave')
			];

		if(Auth::attempt($usuario)) {
	        return Redirect::to('index');
		}else{
			return Redirect::to('/')->with('login_errors', true);
		}
	}
}

?>