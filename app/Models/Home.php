<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'title_intro', 'intro', 'title_text', 'text', 'title_text_1', 'text_1', 'page_color', 'accent_color'
    ];
    public $timestamps = false;

}
