<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->bigIncrements('id_music',5);
            $table->string('nombre_music',30);
            $table->unsignedBigInteger('id_artis')->onDelete('cascade');
            $table->foreign('id_artis')->references('id_artis')->on('artists');
            $table->string('caratula_music');
            $table->time('duracion_music');
            $table->unsignedBigInteger('id_genero')->onDelete('cascade');
            $table->foreign('id_genero')->references('id_genero')->on('generos');
            $table->string('formato_music',3);
            $table->string ('discografica_music',30);
            $table->longText('descripcion_music',50);
            $table->date('fecha_music');
            $table->unsignedBigInteger('id_album')->onDelete('cascade');
            $table->foreign('id_album')->references('id_album')->on('albums');
            $table->rememberToken();
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
        Schema::dropIfExists('musics');
    }
}
