<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Wildside\Userstamps\Userstamps;

class HomeBanner extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'img',
        'mob_img',
        'heading',
        'ar_heading',
        'content',
        'ar_content',
        'btn_text',
        'ar_btn_text',
        'btn_link',
        'sort_order',
        'status',
    ];

    public function getImage()
    {
        return $this->img ? URL::to($this->img) : asset('adminassets/img/placeholder.png');
    }

    public function getMobImage()
    {
        return $this->mob_img ? URL::to($this->mob_img) : asset('adminassets/img/placeholder.png');
    }

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;

        if ($lang !== 'en') {
            $field = 'ar_' . $field;
        }

        return $this->$field;
    }
}
