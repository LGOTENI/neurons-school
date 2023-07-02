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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string("photo")->nullable();
            $table->string('date_naissance');
            $table->string('nationalite');
            $table->string('lieu_naissance');
            $table->string('statut')->default("etudiant");
            $table->string('matricule');
            $table->string('password');
            $table->string('documents')->nullable();
            $table->longText('adresse')->nullable()->default(null);
            $table->string('email')->nullable();
            $table->string('telephone');
            $table->unsignedBigInteger('faculte_id')->nullable();
            $table->foreign('faculte_id')->references('id')->on('facultes')->onDelete('cascade');
            $table->unsignedBigInteger('pre_inscription_id')->nullable()->default(null);
            $table->foreign('pre_inscription_id')->references('id')->on('pre_inscriptions')->onDelete('cascade');
            $table->unsignedBigInteger('option_id')->nullable();
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('niveau_id')->nullable();
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
