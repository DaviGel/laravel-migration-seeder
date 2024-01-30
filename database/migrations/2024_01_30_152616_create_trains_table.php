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
            $table->string('azienda', 50)->nullable();
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->time('orario_di_partenza')->nullable();
            $table->time('orario_di_arrivo')->nullable();
            $table->date('data_di_partenza')->nullable();
            $table->date('data_di_arrivo')->nullable();
            $table->string('codice_treno', 10);
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->tinyInteger('in_orario')->default(1)->nullable();
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
