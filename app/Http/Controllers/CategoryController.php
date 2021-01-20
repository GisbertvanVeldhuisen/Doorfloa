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
            'name' => $request->post('name'),
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

    public function deleteCategory($subcategory_id)
    {
        Subcategory::destroy($subcategory_id);

        return redirect('/category')->with('success', 'De categorie is verwijderd!');
    }

    public function categoryInfo($subcategory_id)
    {
        $values = Subcategory::findOrFail($subcategory_id);

        return view('edit-category', [

            'values' => $values,

        ]);
    }

    public function editTheCategory(Request $request)
    {
        $value = Subcategory::find($request->get('id'));
        $value->name = $request->get('name');
        $value->save();

        return redirect('/category')->with('success', 'De categorie is bijgewerkt!');
    }
}
