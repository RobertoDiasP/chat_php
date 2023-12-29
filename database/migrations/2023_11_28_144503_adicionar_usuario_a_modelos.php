<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionarUsuarioAModelos extends Migration
{
    public function up()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->foreignId('id_usuario')->nullable()->constrained('users');
        });
    }

    public function down()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->dropColumn('id_usuario'); 
        });
    }
}
