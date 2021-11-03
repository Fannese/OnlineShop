<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
