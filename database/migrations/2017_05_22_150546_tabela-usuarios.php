<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 50);
            $table->char('email', 50)->unique();
            $table->char('telefone', 13); //(19)9999-9999
            $table->char('celular', 14); //(19)99999-9999
            $table->char('cpf', 14)->unique(); //999.999.999-99
            $table->char('rg', 12)->unique(); //99.999.999-9
            $table->char('cidade', 30);
            $table->char('bairro', 40);
            $table->char('rua', 40);
            $table->smallInteger('numero');
            $table->char('complemento', 40)->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->string('permissao')->default('0');
            $table->char('password', 100);
            $table->rememberToken();
            $table->timestamps();

            $table->integer('id_cargo')->unsigned();
            $table->integer('id_assistencia')->unsigned();

            // $table->foreign('id_cargo')->references('id')->on('cargos');
            // $table->foreign('id_assistencia')->references('id')->on('assistencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
