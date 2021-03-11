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
            $table->string('nombre_artis', 25);
            $table->string('apellido_artis',25);
            $table->string('email_artis',30);
            $table->string('email_verified',35)->unique()->nullable();
            $table->date('fecha_artis');
            $table->enum('sexo_artis',['Masculino','Femenino']);
            $table->string('password_artis',25);
            $table->binary('img_artis')->nullable();
            $table->string('telefono_artis',15);
            $table->string('terminos_artis',3);
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
