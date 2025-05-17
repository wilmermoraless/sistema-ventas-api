<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $fillable = [
       'cliente_id',
        'fecha',
        'total',
    ];
}
