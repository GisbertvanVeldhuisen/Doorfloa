<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Instagram;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


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
                'title_intro' => $request->get('title_intro'),
                'intro' => $request->get('intro'),
                'title_text' => $request->get('title_text'),
                'text' => $request->get('text'),
                'title_text_1' => $request->get('title_text_1'),
                'text_1' => $request->get('text_1'),
                'contact' => $request->get('contact'),
                'contact_text' => $request->get('contact_text'),
                'contact_button' => $request->get('button'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image' => ['mimes:png', 'max:2048'],
            'image_1' => ['mimes:png', 'max:2048'],
            'image_fotografie' => ['mimes:png', 'max:2048'],
            'image_recepten' => ['mimes:png', 'max:2048'],
            'image_contact' => ['mimes:png', 'max:2048'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image'))
            $request->file('image')->storeAs('public/home', 'image-home.' . $request->file('image')->getClientOriginalExtension());

        if ($request->file('image_1'))
            $request->file('image_1')->storeAs('public/home', 'image-home_1.' . $request->file('image_1')->getClientOriginalExtension());

        if ($request->file('image_fotografie'))
            $request->file('image_fotografie')->storeAs('public/home', 'image_fotografie.' . $request->file('image_fotografie')->getClientOriginalExtension());

        if ($request->file('image_recepten'))
            $request->file('image_recepten')->storeAs('public/home', 'image_recepten.' . $request->file('image_recepten')->getClientOriginalExtension());

        if ($request->file('image_contact'))
            $request->file('image_contact')->storeAs('public/home', 'image_contact.' . $request->file('image_contact')->getClientOriginalExtension());

        return back()->with('success', 'De home pagina is aangepast!');
    }

    public function formInfo()
    {
        //Haalt id 1 op
        $value = Home::find(1);

        return view('form',
            [
                'value' => $value
            ]);
    }

    public function Homeinfo()
    {
        //Haalt id 1 op
        $values = Home::find(1);
        //haalt de laatste 5 instagram posts op
        $posts = Instagram::take(5)->orderBy('created_at', 'desc')->get();
        return view('home',
            [
                'values' => $values,
                'posts' => $posts
            ]);
    }
}
