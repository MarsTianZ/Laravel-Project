<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieProductionStudio extends Model
{
    use HasFactory;

    protected $table = 'movie_productions_studio';
    protected $primaryKey = 'movie_productions_studio_id';

    protected $fillable = [
        'movie_productions_studio_name',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_productions_studio_id', 'movie_productions_studio_id');
    }
}
