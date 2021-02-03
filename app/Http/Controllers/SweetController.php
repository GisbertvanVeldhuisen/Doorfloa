<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SweetPage;
use App\Models\Post;
use App\Models\Subcategory;


class SweetController extends Controller
{

    public function updateOrCreate(Request $request)
    {
        SweetPage::updateOrCreate(
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

        return back()->with('success', 'Zoete recepten pagina is aangepast!');
    }

    public function formInfo()
    {
        //Haalt id 1 op
        $value = SweetPage::find(1);

        return view('form-sweet',
            [
                'value' => $value
            ]);
    }

    function getPageInfo(Request $request)
    {
        //Haalt id 1 op
        $values = SweetPage::find(1);

        //Subcategorie is gelijk aan post_category. category_id is gelijk aan subcategory_id. De category_id moet gevonden worden binnnen subcategories en deze moet 1/2 zijn ofterwijl zoet/hartig
        $posts = Post
            ::select([
                'posts.id as id',
                'posts.title as title',
            ])
            ->join('subcategories', 'subcategories.id', '=', 'posts.category')
            ->join('categories', 'categories.id', '=', 'subcategories.category_id')
            ->where('subcategories.category_id', 1)
            ->get();

        if ($request->get('category'))
            $posts = Post
                ::select([
                    'posts.id as id',
                    'posts.title as title',
                ])
                ->join('subcategories', 'subcategories.id', '=', 'posts.category')
                ->join('categories', 'categories.id', '=', 'subcategories.category_id')
                ->where('subcategories.category_id', 1)
                ->where('subcategories.id', $request->get('category'))
                ->get();


        $subcategories = Subcategory::where('category_id', 1)->get();


        return view('sweet', [

            'values' => $values,
            'subcategories' => $subcategories,
            'posts' => $posts,

        ]);
    }
}
