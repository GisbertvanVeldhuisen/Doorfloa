<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    use HasFactory;

    protected $table = 'photography';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'quote', 'contact', 'contact_text', 'contact_button', 'page_color', 'accent_color'
    ];
}
