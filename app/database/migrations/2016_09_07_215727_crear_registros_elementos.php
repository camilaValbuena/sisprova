<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRegistrosElementos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros_elementos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('registro_id')->unsigned();
			$table->foreign('registro_id')->references('id')->on('registros')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('elemento_id')->unsigned();
			$table->foreign('elemento_id')->references('id')->on('elementos')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('registros_elementos');
	}

}
