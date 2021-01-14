<?php

namespace App\Http\Controllers;

use App\Models\HumanPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HumanPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        HumanPage::updateOrCreate(
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
            $request->file('image_slider')->store('public/humansImages');

        if ($request->file('image_slider1'))
            $request->file('image_slider1')->store('public/humansImages');

        if ($request->file('image_slider2'))
            $request->file('image_slider2')->store('public/humansImages');

        return back()->with('success', 'De mensen pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = HumanPage::find(1);

        return view('form-human_page',
            [
                'value' => $value
            ]);
    }

    public function DeleteImage($file)
    {
        Storage::destroy($file);
        return back()->with('success', 'De afbeelding is verwijderd!');
    }

    public function HumanPageInfo()
    {
        $values = HumanPage::find(1);

        return view('human',
            [
                'values' => $values
            ]);
    }
}
