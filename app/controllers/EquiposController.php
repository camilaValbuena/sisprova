<?php 
	class EquiposController extends BaseController{

		public function listar(){
			$equipo = Equipos::all();

			return View::make('equipos.listar', ['equipo' => $equipo]);
		}

		public function formulario(){
			$marca = Parametro::all();
			$persona = Personas::all();

			return View::make('equipos.crear', ['persona' => $persona, 'marca' => $marca]);
		}
		
		public function crear(){
			$crear = Equipos::validacion(Input::all());

			if ($crear['error']) {
				return Redirect::to('equipos/ingresar')->withErrors($crear['mensaje'] )->withInput();
			}else{
				return Redirect::to('equipos')->with('msj1', $crear['mensaje']);
			}
		}

		public function inhabilitar($id){
			$id = Equipos::find($id);
			$id->p_estado = 101;
			$id->save();

			return Redirect::to('equipos')->with('msj1', 'Equipo inhabilitado correctamente');
		}

		public function habilitar($id){
			$id = Equipos::find($id);
			$id->p_estado = 100;
			$id->save();

			return Redirect::to('equipos')->with('msj1', 'Equipo habilitado correctamente');
		}

		public function obtener($id){
			$equipo = Equipos::find($id);
			$marca = Parametro::all();
			$persona = Personas::all();

			return View::make('equipos.editar', ['equipo' => $equipo, 'marca' => $marca, 'persona' => $persona]);
		}

		public function editar($id){
			$equipo = Equipos::find($id);
			$equipo->numero_serial = Input::get('serial');
			$equipo->descripcion = Input::get('descripcion');
			$equipo->color = Input::get('color');
			$equipo->observaciones = Input::get('observaciones');
			$equipo->p_marca = Input::get('marca');
			$equipo->persona_id = Input::get('persona');
			$equipo->save();

			return Redirect::to('equipos')->with('msj1', 'Equipo actualizado correctamente');
		}
	}

?>