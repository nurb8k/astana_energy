<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTitleAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->title_ru : $this->title_kz;
    }

    public function getDescAttribute()
    {
        $locale = app()->getLocale();

        return $locale === 'ru' ? $this->desc_ru : $this->desc_kz;
    }

    public function getPublishAttribute()
    {
        $locale = app()->getLocale();
        if($locale == 'kz')
            $locale = 'kk_KZ';
        else
            $locale = 'ru_RU';

      return  \Carbon\Carbon::parse($this->time_publish)->locale($locale)->isoFormat('D MMMM YYYY');
    }

    public function tags()
    {
         return $this->belongsToMany(Tag::class,'news_tags');
    }



}
