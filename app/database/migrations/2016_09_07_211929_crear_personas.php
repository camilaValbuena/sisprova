<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPersonas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('p_tipo_documento')->unsigned();
			$table->foreign('p_tipo_documento')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->string('numero_documento');
			$table->string('primer_nombre');
			$table->string('segundo_nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->string('correo');
			$table->string('telefono');
			$table->date('fecha_nacimiento');
			$table->string('password');
			$table->string('remember_token');
			$table->integer('rol_id')->unsigned();
			$table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('p_sede')->unsigned()->nullable();
			$table->foreign('p_sede')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('p_centro')->unsigned()->nullable();
			$table->foreign('p_centro')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('p_programa')->unsigned()->nullable();
			$table->foreign('p_programa')->references('id')->on('parametros')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('personas');
	}

}
