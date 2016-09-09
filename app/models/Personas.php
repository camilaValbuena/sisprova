<?php
	class Personas extends Eloquent{
		protected $table = "personas";
		protected $fillable = ['id', 'tipo_documento', 'numero_documento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'correo', 'direccion', 'telefono', 'fecha', 'rol_id', 'sede_id', 'centro_id', 'programa_id', 'estado_id'];
		public $timestamps = false;
	}
?>