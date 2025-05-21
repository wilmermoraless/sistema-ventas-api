<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
     use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed',
        'user_id',
        'priority',
        'due_date'
    ];

    protected $casts = [
        'completed' => 'boolean',
        'due_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
