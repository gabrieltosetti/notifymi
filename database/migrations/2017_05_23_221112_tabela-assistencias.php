<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaAssistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->default('default.jpg');
            $table->char('nome', 50);
            $table->char('descricao', 255);
            $table->char('email', 50)->unique();
            $table->char('site', 30);
            $table->char('cnpj', 18)->unique(); //71.641.243/0001-57
            $table->char('telefone1', 13); //(19)9999-9999
            $table->char('telefone2', 13); //(19)9999-9999
            $table->char('celular', 14); //(19)99999-9999
            $table->char('cidade', 30);
            $table->char('bairro', 40);
            $table->char('rua', 40);
            $table->smallInteger('numero');
            $table->char('completemento', 40);

            $table->integer('id_usuario')->unsigned()->nullable();

            // $table->foreign('id_usuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('assistencias');
    }
}
