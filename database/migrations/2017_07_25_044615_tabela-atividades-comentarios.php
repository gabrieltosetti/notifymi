<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaAtividadesComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->char('status', 255);
            $table->char('comentario', 255)->nullable();            

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_atividade')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_atividade')->references('id')->on('atividades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('atividades_comentarios');
    }
}
