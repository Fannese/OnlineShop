<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeschirrModel extends Model
{
    use HasFactory;
    protected $table = 'geschirrs';

    protected $faillable = [
        'name',
        'bild',
        'beschreibung',
        'Preis',

    ];
}
