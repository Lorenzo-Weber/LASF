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
        Schema::create('apostas_depositos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banco');
            $table->float('deposito');
            $table->string('responsavel');
            $table->string('casa');
            $table->float('valor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apostas_depositos');
    }
};
