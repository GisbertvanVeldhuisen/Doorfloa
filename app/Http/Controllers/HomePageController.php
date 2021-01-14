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
            'image' => ['mimes:png'],
            'image_1' => ['mimes:png'],
            'image_fotografie' => ['mimes:png'],
            'image_recepten' => ['mimes:png'],
            'image_contact' => ['mimes:png'],
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

}
