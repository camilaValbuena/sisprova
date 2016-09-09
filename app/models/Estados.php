<?php
	class Estados extends Eloquent{
		protected $table = "estados";
		protected $fillable = ['id', 'descripcion'];
		public $timestamps = false;
	}
?>