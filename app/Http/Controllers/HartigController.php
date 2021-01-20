<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subcategory;

class HartigController extends Controller
{
    public function getCategoryInfo()
    {
        $subcategories = Subcategory::where('category_id', 2)->get();

        $posts = Post
            ::select([
                'posts.id as id',
                'posts.title as title',
            ])
            ->join('subcategories', 'subcategories.id', '=', 'posts.category')
            ->join('categories', 'categories.id', '=', 'subcategories.category_id')
            ->where('subcategories.category_id', 2)
            ->get();

        //dd($posts);

        return view('sweet', [

            'subcategories' => $subcategories,
            'posts' => $posts,

        ]);
    }
}
