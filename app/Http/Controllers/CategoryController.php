<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function updateOrCreateCategory(Request $request)
    {
        Subcategory::create(
            [
            'category_id' => $request->post('category_id'),
            'subcategory_name' => $request->post('subcategory_name'),
            ]
        );

        return back()->with('success', 'De categorie is aangemaakt!');
    }

    public function getCategories()
    {
        $subcategories = Subcategory::with('category')->get();
        $categories = Category::all();

        return view('category', [

            'subcategories' => $subcategories,
            'categories' => $categories,

        ]);
    }

    public function deleteCategory(Request $request)
    {
        Category::destroy($request->get('id'));

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
