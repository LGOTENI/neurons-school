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
        Schema::create('carte_etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->unsignedBigInteger('faculte_id');
            $table->foreign('faculte_id')->references('id')->on('facultes')->onDelete('cascade');
            $table->unsignedBigInteger('option_id');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('niveau_id');
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
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
