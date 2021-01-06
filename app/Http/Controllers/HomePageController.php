<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;


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
                'title' => $request->get('title'),
                'title_intro' => $request->get('title_intro'),
                'intro' => $request->get('intro'),
                'title_text' => $request->get('title_text'),
                'text' => $request->get('text'),
                'title_text_1' => $request->get('title_text_1'),
                'text_1' => $request->get('text_1'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image' => ['mimes:png'],
            'image_1' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image'))
            $request->file('image')->storeAs('public', 'image-tekst.' . $request->file('image')->getClientOriginalExtension());

        if ($request->file('image_1'))
            $request->file('image_1')->storeAs('public', 'image-tekst_1.' . $request->file('image_1')->getClientOriginalExtension());


        return redirect()->back()->withInput();
    }

    public function formInfo()
    {
        $value = Home::find(1);

        return view('form',
            [
                'value' => $value
            ]);
    }

    public function Homeinfo()
    {
        $values = Home::find(1);

        return view('home',
            [
                'values' => $values
            ]);
    }

/*    public static function getColour()
    {
        DB::table('Home')->select('page_color', 'accent_color')->get();

        return redirect()->back()->withInput();

    }*/
}
