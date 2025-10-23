<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking; // ⬅️ ini yang penting ditambah

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'type',
        'description',
        'price_per_night',
        'is_available',
        'image'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
