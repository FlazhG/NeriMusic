<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usu',5);
            $table->string('nombre_usu',30);
            $table->string('apellido_usu',30);
            $table->string('email_usu',30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('fecha_usu');
            $table->enum('sexo_usu',['Masculino','Femenino']);
            $table->string('password_usu',12);
            $table->binary('img_usu');
            $table->string('telefono_usu',10);
            $table->string('terminos_usu',1);
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id_usu')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
