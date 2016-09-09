<?php
	class Equipos extends Eloquent{
		protected $table = "equipos";
		protected $fillable = ['id', 'numero_serial', 'color', 'elementos_ex', 'marca_id', 'persona_id', 'estado_id'];
		public $timestamps = false;
	
		public function marca(){
			return $this->belongsTo('Marcas', 'marca_id');
		}

		public function persona(){
			return $this->belongsTo('Personas', 'persona_id');
		}

		public function estado(){
			return $this->belongsTo('Estados', 'estado_id');
		}

		public static function validacion($datos){
			$respuesta = [];
			$formulario = [
			'numero_serial' => ['required','max:40'],
			'color' => ['required','max:50'],
			'elementos_ex' => ['required','max:50'],
			'marca_id' => ['required','max:11'],
			'persona_id' => ['required','max:11'],
			'estado_id' => ['required','max:11']
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