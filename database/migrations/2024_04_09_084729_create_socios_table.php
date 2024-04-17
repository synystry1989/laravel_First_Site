<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
// estamos a criar uma tabela users id chave estrangeira que queremos relacionar com socios cada socio tera utilizadores filiados a ele
// adicionamos a tabela com a chave estrangeira user id e relacionamos "constrained"
            $table->foreignId("user_id")->constrained();
            $table->string("nome");
            $table->string("cc");
            $table->string("morada");
            $table->string("codigo_Postal");
            $table->string("localidade");
            $table->string("email");
            $table->string("telefone");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
