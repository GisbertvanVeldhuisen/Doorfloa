<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipe';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'quote', 'title_text', 'text', 'title_text_1', 'text_1', 'contact', 'contact_text', 'contact_button', 'page_color', 'accent_color'
    ];
}
