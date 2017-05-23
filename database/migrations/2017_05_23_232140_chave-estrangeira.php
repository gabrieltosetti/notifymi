<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrangeira extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->foreign('id_assistencia')->references('id')->on('assistencias');
        });

        Schema::table('clientes_assistencias', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_assistencia')->references('id')->on('assistencias');
        });

        Schema::table('consertos', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_assistencia')->references('id')->on('assistencias');
        });

        Schema::table('cargos', function (Blueprint $table) {
            $table->foreign('id_assistencia')->references('id')->on('assistencias');
        });

        Schema::table('assistencias', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
