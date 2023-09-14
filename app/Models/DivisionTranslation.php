<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'title',
        'menu_text',
        'content_1',
        'content_2',
        'division_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
