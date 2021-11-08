<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderModel;

class GeschirrModel extends Model
{
    use HasFactory;
    protected $table = 'geschirrs';

    protected $fillable = [
        'name',
        'bild',
        'beschreibung',
        'preis',
        'anzahl',
        'kategorie',

    ];

    public function zugriff()
    {
        return $this->hasOne(OrderModel::class, 'user_id', 'id');
    }
}
