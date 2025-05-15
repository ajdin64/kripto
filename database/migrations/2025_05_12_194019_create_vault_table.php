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
        Schema::create('vault', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->string('kolicina');
            $table->string('cijena');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vault');
    }
};
