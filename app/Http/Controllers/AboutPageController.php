<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        About::updateOrCreate(
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
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image' => ['mimes:png'],
        ]);
        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image'))
            $request->file('image')->storeAs('public/about', 'image-about.' . $request->file('image')->getClientOriginalExtension());




        return back()->with('success', 'De about pagina is aangepast!');
    }
    public function formInfo()
    {
        $value = About::find(1);

        return view('form-about',
            [
                'value' => $value
            ]);
    }

    public function Aboutinfo()
    {
        $values = About::find(1);

        return view('about',
            [
                'values' => $values
            ]);
    }
}
