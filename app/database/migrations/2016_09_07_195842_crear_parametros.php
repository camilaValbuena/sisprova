<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearParametros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parametros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tipo_registro_id')->unsigned();
			$table->foreign('tipo_registro_id')->references('id')->on('tipo_parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->string('nombre');
			$table->string('descripcion');
			$table->integer('p_estado')->unsigned()->nullable();
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
		Schema::drop('parametros');
	}

}
