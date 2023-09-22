<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $fillable = [
        'type','title', 'ar_title', 'description', 'ar_description', 'slug', 'last_date', 'status'
    ];
}
