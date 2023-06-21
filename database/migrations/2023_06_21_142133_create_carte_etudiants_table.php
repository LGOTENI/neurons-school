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
        Schema::create('carte_etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('etudiant');
            $table->foreign('etudiant')->references('id')->on('etudiants')->onDelete('cascade');
            $table->unsignedBigInteger('falculte');
            $table->foreign('faculte')->references('id')->on('facultes')->onDelete('cascade');
            $table->unsignedBigInteger('option');
            $table->foreign('option')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('niveau');
            $table->foreign('niveau')->references('id')->on('niveaux')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carte_etudiants');
    }
};
