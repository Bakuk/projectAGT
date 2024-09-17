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
        Schema::create('education_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialties_id')->references('id')
            ->on('specialties')
            ->onDelete('cascade');
            $table->string('period');
            $table->string('path_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_plans');
    }
};
