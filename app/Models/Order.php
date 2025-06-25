<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Only these fields are fillable
    protected $fillable = ['name', 'address', 'phone', 'user_id'];

    // Relationship with OrderItem (one-to-many)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
