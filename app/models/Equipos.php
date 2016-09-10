<?php
	class Equipos extends Eloquent{
		protected $table = "equipos";
		protected $fillable = ['id', 'numero_serial', 'descripcion', 'color', 'observaciones', 'p_marca', 'persona_id', 'p_estado'];
	
		public function marca(){
			return $this->belongsTo('Parametro', 'p_marca');
		}

		public function persona(){
			return $this->belongsTo('Personas', 'persona_id');
		}

		public function estado(){
			return $this->belongsTo('Parametro', 'p_estado');
		}

		public static function validacion($datos){
			$respuesta = [];
			$formulario = [
			'numero_serial' => ['required','max:255'],
			'descripcion' => ['required','max:255'],
			'color' => ['required','max:255'],
			'observaciones' => ['required','max:255'],
			'p_marca' => ['required','max:10'],
			'persona_id' => ['required','max:10'],
			'p_estado' => ['required','max:10']
			];

			$validator = Validator::make($datos, $formulario);

			if ($validator->fails()) {
				$respuesta['mensaje'] = $validator;
				$respuesta['error'] = true;
			}else{
				$equipos = static::create($datos);
				$respuesta['mensaje'] = 'Equipo registrado con exito';
				$respuesta['error'] = false;
			}

			return $respuesta;
		}
	}

?>