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
            $table->char('observacao', 255)->default('Nenhuma observação feita.')->nullable();
            $table->decimal('orcamento', 12, 2);
            $table->string('foto')->default('default.jpg');
            $table->char('status', 15);
            $table->char('prioridade', 10);
            $table->char('titulo', 50);
            $table->timestamp('data_entrega');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_assistencia')->unsigned();
            $table->integer('id_cliente')->unsigned();


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
