<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemDePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_de_pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('CPF', 14);
            $table->string('CNPJ', 14);
            $table->string('telefone', 15);
            $table->string('endereco');
            $table->string('cidade');
            $table->string('UF',2);
            $table->decimal('valor',9,2);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_de_pagamentos');
    }
}
