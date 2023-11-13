<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'package';
    protected $fillable = [
        'title',
        'slug',
        'image',
        'meta_title',
        'seo_keyword',
        'description',
        'meta_description',
        'status',
    ];
}
