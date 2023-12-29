<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('clientes', function (Blueprint $table) {
                $table->id();
                $table->string('cidade');
                $table->string('bairro');
                $table->string('cnpj')->unique();
                $table->string('estado');
                $table->string('descricao');
                $table->string('telefone');
                $table->string('cep');
                $table->string('razao');
                $table->string('email')->unique();
                $table->string('rua');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
