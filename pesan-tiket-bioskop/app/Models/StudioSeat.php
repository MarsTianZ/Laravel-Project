<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudioSeat extends Model
{
    use HasFactory;

    protected $primaryKey = 'studio_seats_id'; // Custom primary key
    protected $fillable = [
        'studio_id', 'seat_number', 'seat_status'
    ];
    public $timestamps = false;
    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
