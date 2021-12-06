<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontaktModel extends Model
{
    use HasFactory;
    protected $table = 'kontakt';
    protected $fillable = [
        'name',
        'email',
        'nachricht'
    ];
}
