<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

    public function deleteCategory($category_id)
    {
        Category::destroy($category_id);

        return back()->with('success', 'De categorie is verwijderd!');
    }

    public function categoryInfo($category_id)
    {
        $categories = Category::find($category_id);

        return view('edit-category', [

            'categories' => $categories

        ]);
    }

    public function editTheCategory(Request $request, Category $category)
    {

        $categories['category_name'] = $request->get('category_name');

        // This will save to the database
        $category->update([
            'category_name' => $request->get('category_name'),
        ]);

        return view('edit-category', [

            'categories' => $categories

        ]);

    }
}
