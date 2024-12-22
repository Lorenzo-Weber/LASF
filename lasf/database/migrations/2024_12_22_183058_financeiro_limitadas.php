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
        Schema::create('financeiro_limitadas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('conta');
            $table->string('casa');
            $table->string('responsavel');
            $table->string('vendedor');
            $table->float('saldoFim');
            $table->float('Em Saque');
            $table->float('sacado');
            $table->float('pagoCasa');
            $table->float('saldoRestante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiro_limitadas');
    }
};
