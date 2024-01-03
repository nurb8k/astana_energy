<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $guarded = [];
    protected $table = 'tarifs';


    public function getNameAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->name_ru : $this->name_kz;
    }

    public function getDateAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->date_ru : $this->date_kz;
    }

    public function getDocAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->doc_ru : $this->doc_kz;
    }

}
