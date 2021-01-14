<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'title_text', 'text', 'contact', 'contact_text', 'contact_button','page_color', 'accent_color'

    ];
}
