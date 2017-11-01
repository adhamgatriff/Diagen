<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioDiagrama extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_diagrama', function (Blueprint $table) {
			$table->integer('id_usuario')->unique()->unsigned();
			$table->integer('id_diagrama')->unique()->unsigned();
			$table->timestamp('created_at')->nullable();
			$table->primary(['id_usuario', 'id_diagrama']);

			$table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
			$table->foreign('id_diagrama')->references('id')->on('diagramas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('usuario_diagrama');
	}
}
