<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moebel extends Model
{
    use HasFactory;
    protected $table = 'moebels';

    protected $faillable = [
        'name',
        'bild',
        'preis',
        'beschreibung'
    ];
}
