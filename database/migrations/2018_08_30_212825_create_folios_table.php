<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_folio')->unique();
            $table->string('nombre_creador');
            $table->string('nom_departamento_emitido');
            $table->string('nom_dependecia_dirigido');
            $table->string('documento')->default('default.jpg');
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
        Schema::dropIfExists('folios');
    }
}
