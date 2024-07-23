<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'movie_id';

    protected $fillable = [
        'movie_poster',
        'movie_title',
        'movie_type',
        'movie_producers_id',
        'movie_directors_id',
        'movie_writers_id',
        'movie_productions_studio_id',
        'movie_casts_id',
        'movie_trailer',
        'movie_synopsis',
        'movie_ratings',
        'movie_slug',
        'movie_price',
    ];

    public function producer()
    {
        return $this->belongsTo(MovieProducer::class, 'movie_producers_id', 'movie_producers_id');
    }

    public function director()
    {
        return $this->belongsTo(MovieDirector::class, 'movie_directors_id', 'movie_directors_id');
    }

    public function writer()
    {
        return $this->belongsTo(MovieWriter::class, 'movie_writers_id', 'movie_writers_id');
    }

    public function productionStudio()
    {
        return $this->belongsTo(MovieProductionStudio::class, 'movie_productions_studio_id', 'movie_productions_studio_id');
    }

    public function cast()
    {
        return $this->belongsTo(MovieCast::class, 'movie_casts_id', 'movie_casts_id');
    }
}
