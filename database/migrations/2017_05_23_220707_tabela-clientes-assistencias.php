<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaClientesAssistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clietes_assistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->integer('id_assistencia');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->integer('id_assistencia')->references('id')->on('assistencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clietes_assistencias');
    }
}
