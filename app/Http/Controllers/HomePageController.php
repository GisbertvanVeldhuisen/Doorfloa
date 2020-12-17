<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        Home::updateOrCreate(
            [
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
//                'title' => $request->get('title'),
//                'intro' => $request->get('intro'),
//                'title_text' => $request->get('text'),
//                'text' => $request->get('text'),
//                'title_text_1' => $request->get('text'),
//                'text_1' => $request->get('text'),
//                'page_color	' => $request->get('color'),
            ]
        );

        return redirect()->back()->withInput();
    }
}
