<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name', 'page_title','image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8','image9','button_link_1','button_link_2', 'button_link_3', 'video_link'
    ];

    protected $with = ['translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations()
    {
        return $this->hasMany(PageTranslations::class,'page_id','id');
    }

    public function seo()
    {
        return $this->hasMany(PageSeos::class,'page_id','id');
    }

    public function getImage1()
    {
        return $this->image1 ? URL::to($this->image1) : asset('img/placeholder.png');
    }

    public function getImage2()
    {
        return $this->image2 ? URL::to($this->image2) : asset('img/placeholder.png');
    }

    public function getImage3()
    {
        return $this->image3 ? URL::to($this->image3) : asset('img/placeholder.png');
    }

    public function getImage4()
    {
        return $this->image4 ? URL::to($this->image4) : asset('img/placeholder.png');
    }

    public function getImage5()
    {
        return $this->image5 ? URL::to($this->image5) : asset('img/placeholder.png');
    }

    public function getImage6()
    {
        return $this->image6 ? URL::to($this->image6) : asset('img/placeholder.png');
    }

    public function getImage7()
    {
        return $this->image7 ? URL::to($this->image7) : asset('img/placeholder.png');
    }

    public function getImage8()
    {
        return $this->image8 ? URL::to($this->image8) : asset('img/placeholder.png');
    }

    public function getImage9()
    {
        return $this->image9 ? URL::to($this->image9) : asset('img/placeholder.png');
    }
}
