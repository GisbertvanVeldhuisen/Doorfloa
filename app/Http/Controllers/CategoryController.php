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

    public function getCategoryInfo()
    {
        $categories = Category::all();

        return view('category', [

            'categories' => $categories,

        ]);
    }

    public function getCategoryInfo2()
    {
        $categories = Category::all();

        return view('category', [

            'categories' => $categories,

        ]);
    }

    public function deleteCategory($category_id)
    {
        Category::destroy($category_id);

        return back()->with('success', 'De categorie is verwijderd!');
    }


    public function categoryInfo($category_id)
    {
        $categories = Category::findorfail($category_id);

        return view('edit-category', [

            'categories' => $categories

        ]);

    }

    public function editTheCategory(Request $request)
    {
        Category::updateOrCreate(

            ['category_name' => $request->get('category_name')

        ]);


//        return redirect('/category');
    }
}
