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
        Schema::create('payment', function (Blueprint $table) {
            $table->string('payment_id')->primary();
            $table->string('nama', 255);
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_pembayaran', 255);
            $table->string('status_pembayaran', 255);
            $table->unsignedBigInteger('movie_id');
            // Change this line
            $table->unsignedBigInteger('studio_id'); // Adjusted to match the studios table
            $table->string('seat_number');
            $table->unsignedBigInteger('seat_id');
            $table->decimal('total', 19, 2);
            $table->timestamps();
            // Foreign keys
            $table->foreign('studio_id')->references('studio_id')->on('studios');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('seat_id')->references('studio_seats_id')->on('studio_seats');
            $table->foreign('movie_id')->references('movie_id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
