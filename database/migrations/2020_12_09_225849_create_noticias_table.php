<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //create table
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',20);
            $table->string('texto',200);
            $table->binary('imagen')->nullable($value = true); //imagen
            $table->string('autor',50);
            $table->date('fecha')->nullable($value = true);
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
        Schema::dropIfExists('noticia');
    }
}
