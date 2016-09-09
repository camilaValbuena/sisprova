<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRolesPermisos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_permisos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rol_id')->unsigned();
			$table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('permiso_id')->unsigned();
			$table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('roles_permisos');
	}

}
