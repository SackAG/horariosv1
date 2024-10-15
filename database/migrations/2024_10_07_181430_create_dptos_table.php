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
        Schema::create('dptos', function (Blueprint $table) {
            $table->string('idDpto',2)->primary();
            $table->string('nombreDpto')->nullable()->unique();
            $table->string('nombreMid')->nullable()->unique();
            $table->string('nombreCorto')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dptos');
    }
};
