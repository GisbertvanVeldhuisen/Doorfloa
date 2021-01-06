<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function updateOrCreateCategory(Request $request)
    {
        Category::updateOrCreate([
            'post_title' => $request->post('post_title'),
        ]);


        return back()->with('success', 'De post is aangemaakt!');
    }

    public function index(){
        return view('createcategory');
    }
}
