<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function updateOrCreateCategory(Request $request)
    {
        Category::updateOrCreate([
            'category_name' => $request->post('category_name'),
        ]);


        return back()->with('success', 'De categorie is aangemaakt!');
    }

    public function index(){
        return view('category');
    }

    public function deleteCategory($category_id)
    {
        Category::destroy($category_id);

        return back()->with('success', 'De categorie is verwijderd!');
    }
}
