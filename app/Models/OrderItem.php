<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'order_id',
        'geschirr_id',
        'menge',
        'preis',
    ];
    public function items()
    {
        return $this->belongsTo(OrderModel::class, 'user_id', 'id');
    }
}
