<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'title',
        'image',
        'status'
    ];

    // protected $with = ['translations'];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function getImage($field)
    {
        return $this->$field ? URL::to($this->$field) : asset('adminassets/img/placeholder.png');
    }
}
