<?php

namespace App\Models;

use App\Models\Common\Seo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Wildside\Userstamps\Userstamps;


class Blog extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'title',
        'ar_title',
        'content',
        'ar_content',
        'image',
        'status',
    ];

    public function getImage()
    {
        return $this->image ? URL::to($this->image) : asset('img/placeholder.png');
    }

    // public function getURL($newsURL)
    // {
    //     return URL::to($newsURL . $this->slug);
    // }
}
