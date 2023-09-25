<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'menu_image',
        'banner_image',
        'image_1',
        'image_2',
        'slug',
        'status','seo_title', 'og_title', 'twitter_title', 'seo_description', 'og_description', 'twitter_description', 'keywords'
    ];

    protected $with = ['category_translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;
        $category_translations = $this->category_translations->where('lang', $lang)->first();
        return $category_translations != null ? $category_translations->$field : $this->$field;
    }

    public function category_translations()
    {
        return $this->hasMany(ProductCategoryTranslation::class);
    }

    public function getImage($field)
    {
        return $this->$field ? URL::to($this->$field) : asset('adminassets/img/placeholder.png');
    }
}
