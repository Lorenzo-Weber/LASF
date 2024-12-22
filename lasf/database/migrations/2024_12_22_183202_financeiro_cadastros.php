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
        Schema::create('financeiro_cadastros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('cep');
            $table->string('numero');
            $table->string('email');
            $table->string('senha');
            $table->string('agente');
            $table->string('status');
            $table->string('loginBet');
            $table->string('senhaBet');
            $table->string('casa');
            $table->date('Data de nascimento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiro_cadastros');
    }
};
