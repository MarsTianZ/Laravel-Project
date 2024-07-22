<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieDirector extends Model
{
    use HasFactory;

    protected $table = 'movie_directors';
    protected $primaryKey = 'movie_directors_id';

    protected $fillable = [
        'movie_directors_name',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_directors_id', 'movie_directors_id');
    }
}
