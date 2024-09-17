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
        Schema::create('image_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->constrained('images')->onDelete('cascade');
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade');
            $table->boolean('is_cover')->default(0); // для отметки обложки
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_news');
    }
};