<?php

namespace App\Http\Controllers;
use App\Models\Photography;
use Illuminate\Http\Request;

class PhotographyPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        photography::updateOrCreate(
            [
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
                'title' => $request->get('title'),
                'intro' => $request->get('intro'),
                'quote' => $request->get('quote'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image_dieren' => ['mimes:png'],
            'image_mensen' => ['mimes:png'],
            'image_landschap' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_dieren'))
            $request->file('image_dieren')->storeAs('public', 'image_dieren.' . $request->file('image_dieren')->getClientOriginalExtension());

        if ($request->file('image_mensen'))
            $request->file('image_mensen')->storeAs('public', 'image_mensen.' . $request->file('image_mensen')->getClientOriginalExtension());

        if ($request->file('image_landschap'))
            $request->file('image_landschap')->storeAs('public', 'image_landschap.' . $request->file('image_landschap')->getClientOriginalExtension());

        return back()->with('success', 'De fotografie pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = photography::find(1);

        return view('form',
            [
                'value' => $value
            ]);
    }

    public function photographyInfo()
    {
        $values = photography::find(1);

        return view('photography',
            [
                'values' => $values
            ]);
    }
}
