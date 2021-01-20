<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $primaryKey = 'id';

    protected $fillable = [
        'title_intro',
        'intro',
        'title',
        'ingredients',
        'preparation_title',
        'preparation',
        'page_color',
        'accent_color',
        'category'
    ];
}
