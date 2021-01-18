<?php

namespace App\Http\Controllers;

use App\Models\LandscapePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LandscapesPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        LandscapePage::updateOrCreate(
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

        $request->validate([
            'image_slider' => ['mimes:png'],
            'image_slider1' => ['mimes:png'],
            'image_slider2' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_slider'))
            $request->file('image_slider')->store('public/landscapesImages');

        if ($request->file('image_slider1'))
            $request->file('image_slider1')->store('public/landscapesImages');

        if ($request->file('image_slider2'))
            $request->file('image_slider2')->store('public/landscapesImages');

        return back()->with('success', 'De landschap pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = LandscapePage::find(1);

        return view('form-landscapes_page',
            [
                'value' => $value
            ]);
    }
    public function DeleteImage(Request $request)
    {
        $split = explode('/', $request->post('image'));
        $imageName = end($split);
        Storage::delete('public/landscapesImages/' . $imageName);
        return back()->with('success', 'De afbeelding is verwijderd!');
    }

    public function LandscapePageInfo()
    {
        $values = LandscapePage::find(1);

        return view('landscapes',
            [
                'values' => $values
            ]);
    }
}
