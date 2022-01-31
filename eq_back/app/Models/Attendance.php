<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
 
    use HasFactory;

    protected $fillable = [
        'id_kurs',
        'korisnik_id',
        'datum_pocetka',
    ];
    public $timestamps = false;
}
