<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaConsertos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consertos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('modelo', 50);
            $table->char('defeito', 255);
            $table->double('orcamento', 6, 2);
            $table->date('data_entrega');
            $table->char('observacao', 255);

            $table->integer('id_usuario');
            $table->integer('id_assistencia');
            $table->integer('id_cliente');

            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_assistencia')->references('id')->on('assistencias');
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
        Schema::dropIfExists('consertos');
    }
}
