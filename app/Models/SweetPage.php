<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SweetPage extends Model
{
    use HasFactory;

    protected $table = 'sweet_page';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'page_color', 'accent_color'
    ];
}
