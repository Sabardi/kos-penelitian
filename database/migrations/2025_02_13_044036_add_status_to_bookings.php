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
        Schema::table('bookings', function (Blueprint $table) {
             //    $table->enum('status', ['pending', 'approved', 'cancelled', 'checked_in', 'checked_out'])->default('pending')->after('check_in');
           $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending')->after('check_in');
           // $table->string('status')->default('pending')->after('check_in');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
