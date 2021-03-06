<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\GeschirrModel;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'order_models';
    protected $fillable = [
        'user_id',
        'vorname',
        'name',
        'email',
        'straße',
        'plz',
        'stadt',
        'telephon_nummer',
        'land',
        'totalpreis',
        'sendung_nr',
        'zalung_methode',
        'zalung_id',

    ];
    public function oderitems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
    public function zugriffe()
    {
        return $this->belongsTo(GeschirrModel::class, 'name', 'id');
    }
}
