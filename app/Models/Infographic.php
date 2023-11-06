<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infographic extends Model
{
    use HasFactory;
    protected $table = 'infographics';
    protected $guarded = [];
    protected $casts = [
        'date' => 'date',
    ];
}
