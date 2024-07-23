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
        Schema::create('studios', function (Blueprint $table) {
            $table->id('studio_id');
            $table->string('studio_name');
            $table->string('studio_slug');
            $table->string('studio_status');
            $table->string('movie_id');
            $table->string('movie_slug');
            $table->unsignedInteger('studio_seat_count');
            $table->unsignedInteger('studio_seat_empty');
            $table->unsignedInteger('studio_seat_filled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studios');
    }
};
