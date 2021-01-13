<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandscapePage extends Model
{
    use HasFactory;

    protected $table = 'landscapes_page';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'page_color', 'accent_color'
    ];
}
