<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarenkropModel extends Model
{
    use HasFactory;
    protected $table = 'warenkrop';
    protected $fillable = [
        'user_id',
        'geschirr_id',
        'menge',
    ];

    public function geschirrzugriff()
    {
        return $this->belongsTo(GeschirrModel::class, 'geschirr_id', 'id');
    }
}
