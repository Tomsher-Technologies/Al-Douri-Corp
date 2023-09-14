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
        return $this->img ? URL::to($this->img) : asset('img/placeholder.png');
    }
}
