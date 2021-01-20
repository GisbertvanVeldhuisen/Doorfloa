<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class SweetController extends Controller
{
    public function getCategoryInfo()
    {
        $categories = Category::all();

        return view('sweet', [

            'categories' => $categories,

        ]);
    }
}
