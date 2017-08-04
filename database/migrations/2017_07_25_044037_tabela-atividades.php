<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaAtividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('id');
            $table->char('status', 15);
            $table->dateTime('iniciada');
            $table->dateTime('finalizada')->nullable();
            $table->char('titulo');
            $table->char('descricao', 255);            

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_conserto')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_conserto')->references('id')->on('consertos');
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
        Schema::dropIfExists('atividades');
    }
}
