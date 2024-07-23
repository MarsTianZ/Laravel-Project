<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studios'; // Specify the table name

    protected $primaryKey = 'studio_id'; // Custom primary key

    // Assuming all fields are mass assignable
    protected $fillable = [
        'studio_name',
        'studio_slug',
        'studio_status',
        'studio_seat_count',
        'studio_seat_empty',
        'studio_seat_filled',
        'movie_id',
        'movie_slug',
    ];
}
