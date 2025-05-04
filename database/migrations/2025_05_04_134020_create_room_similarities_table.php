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
        Schema::create('room_similarities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id_1');
            $table->unsignedBigInteger('room_id_2');

            // Nilai cosine similarity-nya
            $table->float('similarity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_similarities');
    }
};
