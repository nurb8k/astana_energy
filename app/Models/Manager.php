<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    protected $guarded = [];

    public function getPositionAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->position_ru : $this->position_kz;
    }
}
