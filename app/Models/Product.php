<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'description',
        'price',
        'stock',
        'image_url',
    ];

    /**
     * Relasi ke OrderItem
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}