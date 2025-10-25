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
        Schema::create('marchios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->string('categoria')->nullable();
            $table->string('indirizzo')->nullable();
            $table->string('email')->nullable();
            $table->string('num_telefono')->nullable();
            $table->string('logo')->nullable();
            $table->text('descrizione')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marchios');
    }
};
