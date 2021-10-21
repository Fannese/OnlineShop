<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'sendung_nr',

    ];
}
