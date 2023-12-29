<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionarNomeAModelos extends Migration
{
    public function up()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->string('nome'); // Adiciona a coluna "nome" após a coluna "arquivo"
        });
    }

    public function down()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->dropColumn('nome'); // Remove a coluna "nome" se a migração for revertida
        });
    }
}
