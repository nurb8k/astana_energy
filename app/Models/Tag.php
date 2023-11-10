<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $guarded = [];

    public function news()
    {
        return $this->belongsToMany(News::class);
    }

    public function getNameAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->name_ru : $this->name_kz;
    }

}
