<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv_domaceg',
        'domaci_zadatak',
        'rok_izrade',
        'domaci_postavio',
        'id_kurs'        
    ];
}
