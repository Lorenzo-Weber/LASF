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
        Schema::create('financeiro_aquisicao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('casa');
            $table->string('operador');
            $table->string('vendedor');
            $table->string('obs');
            $table->float('preco');
            $table->float('pago');
            $table->float('saldoIni');
            $table->float('saldoFim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiro_aquisicao');
    }
};
