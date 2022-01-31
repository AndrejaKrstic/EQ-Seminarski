<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practise extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv_vezbanja',
        'nivo_vezbanja',
        'tacno',
        'netacno',
        'datum_vezbanja',
    ];
    public $timestamps = false;

}
