<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id')->nullable(); 
            $table->string('codigo', 20);
            $table->string('titulo', 50);
            $table->date('ano_publicacion')->nullable();
            $table->string('ubicacion_librero', 60);
            $table->text('prologo');
            $table->integer('numero_copias');
           
            $table->foreign('autor_id')
            ->references('id')->on('autores')
            ->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
