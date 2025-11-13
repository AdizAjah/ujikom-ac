<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'payment_status',
        'payment_gateway',
        'payment_token',
        'shipping_address',
        'shipping_courier',
        'shipping_service',
        'shipping_tracking_number',
        'shipping_cost',
    ];

    /**
     * Relasi ke User (Pemesan)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke OrderItem (Detail item)
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}