<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieProducer extends Model
{
    use HasFactory;

    protected $table = 'movie_producers';
    protected $primaryKey = 'movie_producers_id';

    protected $fillable = [
        'movie_producers_name',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_producers_id', 'movie_producers_id');
    }
}
