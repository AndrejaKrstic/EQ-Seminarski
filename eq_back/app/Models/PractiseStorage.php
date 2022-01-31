<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractiseStorage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_vezbanja',
        'korisnik_id',
        'datum_vezbanja',
    ];
    public $timestamps = false;
}

