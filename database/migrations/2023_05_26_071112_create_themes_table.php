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
        Schema::create('themes', function (Blueprint $table) {//  blueprint défini la structure de la table et ses classes
         //défini les colonnes.
            $table->id();
            $table->string ('name')->unique();
            $table->tinyInteger('status')->default(0);
            $table->string ('url')->nullable();
            $table->string ('color')->nullable();
            $table->timestamps();// ajout de 2 colonnes created et updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
