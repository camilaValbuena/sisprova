<?php 
	class MarcasController extends BaseController{

		public function listar(){
			$marca = Marcas::all();

			return View::make('marcas.listar', ['marca' => $marca]);
		}
		
		public function crear(){
			Marcas::create(Input::all());
			return Redirect::to('marcas')->with('msj1', 'Marca registrada correctamente');
		}

		public function eliminar($id){
			$id = Marcas::find($id);
			$id->estado_id = 2;
			$id->save();

			return Redirect::to('marcas')->with('msj1', 'Marca inhabilitada correctamente');
		}

		public function habilitar($id){
			$id = Marcas::find($id);
			$id->estado_id = 1;
			$id->save();

			return Redirect::to('marcas')->with('msj1', 'Marca habilitada correctamente');
		}

		public function obtener($id){
			$marca = Marcas::find($id);

			return View::make('marcas.editar', ['marca' => $marca]);
		}

		public function editar($id){
			$marca = Marcas::find($id);
			$marca->descripcion = Input::get('descripcion');
			$marca->save();

			return Redirect::to('marcas')->with('msj1', 'Marca actualizada correctamente');
		}
	}

?>