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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('date_naissance');
            $table->string('nationalite');
            $table->string('lieu_naissance');
            $table->string('rang')->default(0);
            $table->longText('adresse')->nullable()->default(null);
            $table->string('email')->nullable();
            $table->string('telephone');
            $table->unsignedBigInteger('falcute');
            $table->foreign('faculte')->references('id')->on('facultes')->onDelete('cascade');
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
