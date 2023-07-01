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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->longText('description');
            $table->unsignedBigInteger('faculte_id');
            $table->foreign('faculte_id')->references('id')->on('facultes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
