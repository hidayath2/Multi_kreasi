<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispercetakan extends Model
{
    // use HasFactory;
    protected $fillable = [
        'namabarang',
        'hargasatuan',  
        'satuan',
        'jumlahdipesan',    
    ];
}
