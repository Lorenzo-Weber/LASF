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
        Schema::create('financeiro_cadastroBanco', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('nick');
            $table->string('cpf');
            $table->string('senhaLogin');
            $table->string('senhaTransacao');
            $table->string('agente');
            $table->string('codigo');
            $table->string('status1');
            $table->string('status2');
            $table->float('saldo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiro_cadastroBanco');
    }
};
