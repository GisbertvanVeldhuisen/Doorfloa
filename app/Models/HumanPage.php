<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanPage extends Model
{
    use HasFactory;

    protected $table = 'human_page';

    protected $primaryKey = 'id';


    protected $fillable = [
        'title', 'intro', 'page_color', 'accent_color'
    ];
}
