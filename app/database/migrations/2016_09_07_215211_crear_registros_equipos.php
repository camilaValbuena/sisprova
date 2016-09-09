<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRegistrosEquipos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros_equipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('registro_id')->unsigned();
			$table->foreign('registro_id')->references('id')->on('registros')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('equipo_id')->unsigned();
			$table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('registros_equipos');
	}

}
