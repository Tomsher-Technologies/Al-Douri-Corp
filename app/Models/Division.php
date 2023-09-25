<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'menu_image',
        'banner_image',
        'center_image',
        'gallery_image',
        'home_image',
        'status',
        'slug','seo_title', 'og_title', 'twitter_title', 'seo_description', 'og_description', 'twitter_description', 'keywords'
    ];

    protected $with = ['division_translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;
        $division_translations = $this->division_translations->where('lang', $lang)->first();
        return $division_translations != null ? $division_translations->$field : $this->$field;
    }

    public function division_translations()
    {
        return $this->hasMany(DivisionTranslation::class);
    }

    public function getImage($field)
    {
        return $this->$field ? URL::to($this->$field) : asset('adminassets/img/placeholder.png');
    }
}
