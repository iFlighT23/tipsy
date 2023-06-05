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
        Schema::disableForeignKeyConstraints();
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_number');
            $table->string('step_desc');
            $table->Integer('dose');
            $table->tinyInteger('status')->default(0);
            $table->foreignId('id_ingredient');
            $table->foreignId('id_recipe')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};
