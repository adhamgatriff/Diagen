<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diagrama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('diagramas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre', 60);
        $table->longText('diagrama');
        $table->integer('status'); //publico 0 privado 1
        $table->integer('tipo'); //0 = entidad relacion, 1 = clases
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('created_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('diagramas');
    }
}
