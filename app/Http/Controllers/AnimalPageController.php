<?php

namespace App\Http\Controllers;

use App\Models\AnimalPage;
use Illuminate\Http\Request;

class AnimalPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        AnimalPage::updateOrCreate(
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
        /*controleert of image png is*/
        $request->validate([
            'image_slider' => ['mimes:png'],
            'image_slider1' => ['mimes:png'],
            'image_slider2' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_slider'))
            $request->file('image_slider')->store('public/animalsImages');

        if ($request->file('image_slider1'))
            $request->file('image_slider1')->store('public/animalsImages');

        if ($request->file('image_slider2'))
            $request->file('image_slider2')->store('public/animalsImages');

        return back()->with('success', 'De dieren pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = AnimalPage::find(1);

        return view('form-animal_page',
            [
                'value' => $value
            ]);
    }

    public function AnimalPageInfo()
    {
        $values = AnimalPage::find(1);

        return view('animals',
            [
                'values' => $values
            ]);
    }
}

