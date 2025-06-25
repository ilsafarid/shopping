<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // Only these fields are fillable
    protected $fillable = ['order_id', 'product_name', 'quantity', 'price'];

    // Relationship with Order (many-to-one)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
