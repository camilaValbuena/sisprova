<?php
	class Parametro extends Eloquent{
		protected $table = "parametros";
		protected $fillable = ['id', 'tipo_registro_id', 'nombre', 'descripcion', 'p_estado'];
	}
?>