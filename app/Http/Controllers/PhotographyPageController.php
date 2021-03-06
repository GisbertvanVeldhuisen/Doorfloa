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
                'contact' => $request->get('contact'),
                'contact_text' => $request->get('contact_text'),
                'contact_button' => $request->get('button'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image_dieren' => ['mimes:png', 'max:2048'],
            'image_mensen' => ['mimes:png', 'max:2048'],
            'image_landschap' => ['mimes:png', 'max:2048'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_dieren'))
            $request->file('image_dieren')->storeAs('public/photography', 'image_dieren.' . $request->file('image_dieren')->getClientOriginalExtension());

        if ($request->file('image_mensen'))
            $request->file('image_mensen')->storeAs('public/photography', 'image_mensen.' . $request->file('image_mensen')->getClientOriginalExtension());

        if ($request->file('image_landschap'))
            $request->file('image_landschap')->storeAs('public/photography', 'image_landschap.' . $request->file('image_landschap')->getClientOriginalExtension());

        return back()->with('success', 'De fotografie pagina is aangepast!');
    }

    public function formInfo()
    {
        //Haalt id 1 op
        $value = photography::find(1);

        return view('form-photography',
            [
                'value' => $value
            ]);
    }

    public function PhotographyInfo()
    {
        //Haalt id 1 op
        $values = photography::find(1);

        return view('photography',
            [
                'values' => $values
            ]);
    }
}
