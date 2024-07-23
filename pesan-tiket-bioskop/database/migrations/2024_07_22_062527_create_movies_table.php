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
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('movie_poster');
            $table->string('movie_title');
            $table->string('movie_type');
            $table->string('movie_ratings');
            $table->unsignedBigInteger('movie_producers_id');
            $table->unsignedBigInteger('movie_directors_id');
            $table->unsignedBigInteger('movie_writers_id');
            $table->unsignedBigInteger('movie_productions_studio_id');
            $table->unsignedBigInteger('movie_casts_id');
            $table->string('movie_trailer');
            $table->text('movie_synopsis');
            $table->text('movie_slug');
            $table->decimal('movie_price', 19, 2);
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('movie_producers_id')->references('movie_producers_id')->on('movie_producers');
            $table->foreign('movie_directors_id')->references('movie_directors_id')->on('movie_directors');
            $table->foreign('movie_writers_id')->references('movie_writers_id')->on('movie_writers');
            $table->foreign('movie_productions_studio_id')->references('movie_productions_studio_id')->on('movie_productions_studio');
            $table->foreign('movie_casts_id')->references('movie_casts_id')->on('movie_casts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
