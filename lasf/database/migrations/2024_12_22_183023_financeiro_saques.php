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
        Schema::create('financeiro_saques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banco');
            $table->string('reponsavel');
            $table->string('conta');
            $table->string('casa');
            $table->float('valor');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiro_saques');
    }
};
