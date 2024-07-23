<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'payment_id',
        'nama',
        'jenis_pembayaran',
        'status_pembayaran',
        'user_id',
        'movie_id',
        'studio_id',
        'seat_number',
        'seat_id',
        'total',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'movie_id');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'studio_id');
    }

    public function seat()
    {
        return $this->belongsTo(StudioSeat::class, 'seat_id', 'studio_seats_id');
    }
}
