<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmostrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amostras', function (Blueprint $table) {
            $table->id();
            $table->string('id_interno')->nullable();
            $table->string('id_externo')->nullable();
            $table->string('id_cadastro')->nullable();
            $table->string('cultura')->nullable();
            $table->string('propriedade')->nullable();
            $table->string('tipo')->nullable();
            $table->string('lote')->nullable();
            $table->string('status')->nullable();
            $table->date('data_amostra')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amostras');
    }
}
