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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('type'); // apartment, house, villa, studio
            $table->decimal('price', 10, 2);
            $table->string('location');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('area'); // in square feet
            $table->json('images')->nullable(); // array of image paths
            $table->string('video_url')->nullable(); // video tour URL
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_available')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // property owner
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
