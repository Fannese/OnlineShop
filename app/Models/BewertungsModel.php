<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BewertungsModel extends Model
{
    use HasFactory;
    protected $table = 'bewertungs';
    protected $fillable = [
        'user_id',
        'geschirr_id',
        'sterne',
    ];
}
