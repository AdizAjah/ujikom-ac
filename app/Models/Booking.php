<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'booking_date',
        'user_address',
        'user_phone',
        'notes',
        'status',
    ];

    /**
     * Relasi ke User (Pemesan)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Service (Jasa yang dipesan)
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}