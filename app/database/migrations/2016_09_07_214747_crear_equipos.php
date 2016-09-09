<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEquipos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('numero_serial');
			$table->string('descripcion');
			$table->string('color');
			$table->string('observaciones');
			$table->integer('p_marca')->unsigned();
			$table->foreign('p_marca')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('persona_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('p_estado')->unsigned();
			$table->foreign('p_estado')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipos');
	}

}
