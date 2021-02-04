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
        //haalt de id van 1 op
        $value = HartigPage::find(1);

        return view('form-hartig',
            [
                'value' => $value
            ]);
    }

    public function getPageInfo(Request $request)
    {
        $values = HartigPage::find(1);

        $subcategories = Subcategory::where('category_id', 2)->get();


        //Subcategorie is gelijk aan post_category. category_id is gelijk aan subcategory_id. De category_id moet gevonden worden binnnen subcategories en deze moet 1/2 zijn ofterwijl zoet/hartig
        $posts = Post
            ::select([
                'posts.id as id',
                'posts.title as title',
            ])
            ->join('subcategories', 'subcategories.id', '=', 'posts.category')
            ->join('categories', 'categories.id', '=', 'subcategories.category_id')
            ->where('subcategories.category_id', 2)
            ->get();

        if ($request->get('category'))
            $posts = Post
                ::select([
                    'posts.id as id',
                    'posts.title as title',
                ])
                ->join('subcategories', 'subcategories.id', '=', 'posts.category')
                ->join('categories', 'categories.id', '=', 'subcategories.category_id')
                ->where('subcategories.category_id', 2)
                ->where('subcategories.id', $request->get('category'))
                ->get();


        //dd($posts);

        return view('hartig', [

            'values' => $values,
            'subcategories' => $subcategories,
            'posts' => $posts,

        ]);
    }
}
