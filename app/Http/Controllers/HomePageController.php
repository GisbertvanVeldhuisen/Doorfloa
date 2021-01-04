<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Post;
use App\Models\User;


class HomePageController extends Controller
{
    public function updateOrCreate(Request $request){
        Home::updateOrCreate(
            [
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
                'title' => $request->get('title'),
                'intro' => $request->get('intro'),
                'title_text' => $request->get('title_text'),
                'text' => $request->get('text'),
                'title_text_1' => $request->get('title_text_1'),
                'text_1' => $request->get('text_1'),
                'page_color' => $request->get('color'),
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
    public function formInfo(){
        $values = Home::all();

        return view('form',
            [
                'values' => $values
            ]);
    }
    public function Homeinfo(){
        $values = Home::find(1);

        return view('home',
            [
                'values' => $values
            ]);
    }
}
