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
        Schema::create('apostas_resultados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('conta');
            $table->string('casa');
            $table->string('responsavel');
            $table->string('vendedor');
            $table->string('status');
            $table->float('caixaAtual');
            $table->string('pendente');
            $table->float('depositos');
            $table->float('resultado');
            $table->float('inicioMes');
            $table->float('girando');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
