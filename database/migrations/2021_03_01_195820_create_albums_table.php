<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id_album',5);
            $table->string('nombre_album',30);
            $table->binary('img_album')->nullable();
            $table->longText('descripcion_album',50);
            $table->date('fecha_album');
            $table->float('duracion_album');
            //$table->string('cantipistas_album',4);
            $table->unsignedBigInteger('id_genero')->onDelete('cascade');
            $table->foreign('id_genero')->references('id_genero')->on('generos');
            $table->unsignedBigInteger('id_artis')->onDelete('cascade');
            $table->foreign('id_artis')->references('id_artis')->on('artists');
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
        Schema::dropIfExists('albums');
    }
}
