<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HartigPage;
use App\Models\Post;
use App\Models\Subcategory;

class HartigController extends Controller
{

    public function updateOrCreate(Request $request)
    {
        HartigPage::updateOrCreate(
            [
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
                'title' => $request->get('title'),
                'intro' => $request->get('intro'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );

        return back()->with('success', 'Hartige recepten pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = HartigPage::find(1);

        return view('form-hartig',
            [
                'value' => $value
            ]);
    }

    public function getPageInfo()
    {
        $values = HartigPage::find(1);

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

            'values' => $values,
            'subcategories' => $subcategories,
            'posts' => $posts,

        ]);
    }
}
