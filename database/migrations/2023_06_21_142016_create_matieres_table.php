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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->longText('description');
            $table->unsignedBigInteger('faculte_id');
            $table->foreign('faculte_id')->references('id')->on('facultes')->onDelete('cascade');
            $table->unsignedBigInteger('option_id');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
