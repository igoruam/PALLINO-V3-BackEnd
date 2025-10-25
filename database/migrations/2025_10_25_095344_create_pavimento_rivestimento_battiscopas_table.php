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
        Schema::create('pavimento_rivestimento_battiscopas', function (Blueprint $table) {
            $table->id();
            $table->string('prodotto');
            $table->text('descrizione')->nullable();
            $table->foreignId('marchio_id')->constrained('marchios')->onDelete('cascade');
            $table->string('formato')->nullable();
            $table->decimal('disponibilita_mq', 10, 2)->default(0);
            $table->decimal('prezzo_mq_senza_iva', 10, 2)->default(0);
            $table->decimal('prezzo_mq_con_iva', 10, 2)->default(0);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pavimento_rivestimento_battiscopas');
    }
};
