<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassageirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passageiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('telefone');
            $table->char('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->integer('ibge');
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
        Schema::dropIfExists('passageiros');
    }
}
