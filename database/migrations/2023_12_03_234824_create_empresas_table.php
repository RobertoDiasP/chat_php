<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('razao_social')->nullable();
            $table->string('cnpj')->unique();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->decimal('faturamento_anual', 15, 2)->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('responsavel_legal_nome')->nullable();
            $table->string('responsavel_legal_cpf')->nullable();
            $table->string('responsavel_legal_cargo')->nullable();
            $table->string('ramo_atividade')->nullable();
            $table->text('descricao')->nullable();
            $table->date('data_fundacao')->nullable();
            $table->integer('numero_funcionarios')->nullable();
            $table->string('website')->nullable();
            $table->string('redes_sociais')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
