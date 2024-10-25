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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // aggiungo i dati richiesti dalla traccia
            $table->string('azienda',200);
            $table->string('stazione_di_partenza',200)->nullable(false);
            $table->string('stazione_di_arrivo',200)->nullable(false);
            $table->dateTime('orario_di_partenza')->nullable(false);
            $table->dateTime('orario_di_arrivo')->nullable(false);
            $table->string('codice_treno',10)->unique();
            $table->integer('numero_carrozze')->nullable(false);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
