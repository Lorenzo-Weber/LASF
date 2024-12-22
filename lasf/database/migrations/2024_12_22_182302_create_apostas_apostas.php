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
        Schema::create('apostas_apostas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('casa');
            $table->string('conta');
            $table->float('aposta');
            $table->float('resultado');
            $table->float('retorno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apostas_apostas');
    }
};
