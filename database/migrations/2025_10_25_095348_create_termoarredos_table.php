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
        Schema::create('termoarredos', function (Blueprint $table) {
            $table->id();
            $table->string('prodotto');
            $table->foreignId('marchio_id')->constrained('marchios')->onDelete('cascade');
            $table->integer('disponibilita')->default(0);
            $table->string('misure')->nullable();
            $table->string('tipo')->nullable();
            $table->decimal('prezzo_senza_iva', 10, 2)->default(0);
            $table->decimal('prezzo_con_iva', 10, 2)->default(0);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termoarredos');
    }
};
