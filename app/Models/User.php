<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Tambahkan 'role'
        'address', // Tambahkan 'address'
        'phone', // Tambahkan 'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
// ... existing code ...
    protected $hidden = [
        'password',
        'remember_token',
    ];

// ... existing code ...
    protected function casts(): array
    {
        return [
// ... existing code ...
            'password' => 'hashed',
        ];
    }

    // --- TAMBAHAN RELASI ---

    /**
     * Relasi ke Booking
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Relasi ke Order
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}