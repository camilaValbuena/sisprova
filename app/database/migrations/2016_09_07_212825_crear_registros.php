<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRegistros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('p_tipo_registro')->unsigned();
			$table->foreign('p_tipo_registro')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamp('fecha_hora');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('responsable_id')->unsigned();
			$table->foreign('responsable_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('registros');
	}

}
