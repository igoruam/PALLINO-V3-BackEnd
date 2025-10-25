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
        Schema::create('referentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marchio_id')->constrained('marchios')->onDelete('cascade');
            $table->string('nome');
            $table->string('cognome');
            $table->string('numero_telefono')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referentes');
    }
};
