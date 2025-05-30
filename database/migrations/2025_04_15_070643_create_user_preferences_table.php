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
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type')->nullable(); // array lokasi
            $table->json('locations')->nullable(); // array lokasi
            $table->json('facilities')->nullable(); // array fasilitas
            $table->timestamps();
        });
    }
    // $table->string('location')->nullable();
    // $table->integer('min_price')->nullable();
    // $table->integer('max_price')->nullable();
    // $table->enum('gender_type', ['putra', 'putri', 'campur'])->nullable();

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preferences');
    }
};
