<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','ar_name', 'status'
    ];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? getActiveLanguage() : $lang;

        if ($lang !== 'en') {
            $field = 'ar_' . $field;
        }

        return $this->$field;
    }

    public function locations()
    {
        return $this->hasMany(BranchLocations::class,'branch_id')->orderBy('location','ASC');
    }
}
