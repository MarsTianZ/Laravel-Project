<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    use HasFactory;

    protected $table = 'movie_casts';
    protected $primaryKey = 'movie_casts_id';

    protected $fillable = [
        'movie_casts_name',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_casts_id', 'movie_casts_id');
    }
}
