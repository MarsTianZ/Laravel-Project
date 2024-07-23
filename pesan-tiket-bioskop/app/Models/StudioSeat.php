<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudioSeat extends Model
{
    use HasFactory;
    protected $fillable = [
        'studio_id', 'seat_number', 'seat_status'
    ];

    // Define the relationship with Studio model
    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
