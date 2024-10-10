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
        Schema::create('personals', function (Blueprint $table) {
            $table->string('noTrabajador',4)->primary();
            $table->string('RFC',13);
            $table->string('Nombre',50);
            $table->string('ApellidoP',50);
            $table->string('ApellidoM',50);
            $table->string('Licenciatura',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
