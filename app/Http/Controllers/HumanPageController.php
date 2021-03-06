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
            'image_slider' => ['mimes:png', 'max:2048'],
            'image_slider1' => ['mimes:png', 'max:2048'],
            'image_slider2' => ['mimes:png', 'max:2048'],
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
        //Haalt id 1 op
        $value = HumanPage::find(1);

        return view('form-human_page',
            [
                'value' => $value
            ]);
    }

    public function DeleteImage(Request $request)
    {
        //verwijderen van images
        $split = explode('/', $request->post('image'));
        $imageName = end($split);
        Storage::delete('public/humansImages/' . $imageName);
        return back()->with('success', 'De afbeelding is verwijderd!');
    }

    public function HumanPageInfo()
    {
        //Haalt id 1 op
        $values = HumanPage::find(1);

        return view('human',
            [
                'values' => $values
            ]);
    }
}
