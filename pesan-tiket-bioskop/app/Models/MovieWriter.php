<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieWriter extends Model
{
    use HasFactory;

    protected $table = 'movie_writers';
    protected $primaryKey = 'movie_writers_id';

    protected $fillable = [
        'movie_writers_name',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_writers_id', 'movie_writers_id');
    }
}
