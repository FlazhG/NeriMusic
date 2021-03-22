<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id_artis', 5);  
            $table->string('nombre_artis', 40);
            $table->string('apellido_artis',40);
            $table->string('email_artis',40)->unique();
            $table->string('email_verified',40)->nullable();
            $table->date('fecha_artis');
            $table->enum('sexo_artis',['masculino','femenino']);
            $table->string('password_artis');
            $table->binary('img_artis')->nullable();
            $table->string('telefono_arts',25);
            $table->string('terminos_artiis',4);
            $table->string('disquera_artis');
            $table->string('descripcion_artis');
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
        Schema::dropIfExists('artists');
    }
}
