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
        Schema::create('studio_seats', function (Blueprint $table) {
            $table->id("studio_seats_id");
            $table->unsignedBigInteger('studio_id');
            $table->string('seat_number');
            $table->string('seat_status');
            $table->foreign('studio_id')->references('studio_id')->on('studios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studio_seats');
    }
};
