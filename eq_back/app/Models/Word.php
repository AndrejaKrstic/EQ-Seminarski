<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'rec',
        'vrsta_reci',
        'rod',
        'prevod',
        'mnozina',
        'nivo',
        'tag1',
        'id_jezika'
    ];
    public $timestamps = false;
}
