<?php
	class Marcas extends Eloquent{
		protected $table = "marcas";
		protected $fillable = ['id', 'descripcion', 'estado_id'];
		public $timestamps = false;

		public function estado(){
			return $this->belongsTo('Estados', 'estado_id');
		}
	}
?>