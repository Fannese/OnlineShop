<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElektronikModel extends Model
{
    use HasFactory;
    protected $table = 'elektroniks';

    protected $faillable = [
        'name',
        'bild',
        'preis',
        'beschreibung'
    ];
}
