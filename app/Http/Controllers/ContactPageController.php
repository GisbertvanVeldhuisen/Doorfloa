<?php

namespace App\Http\Controllers;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        ContactPage::updateOrCreate(
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
            $request->file('image_slider')->store('public/humansImages');

        if ($request->file('image_slider1'))
            $request->file('image_slider1')->store('public/humansImages');

        if ($request->file('image_slider2'))
            $request->file('image_slider2')->store('public/humansImages');
        return back()->with('success', 'De contact pagina is aangepast!');
    }
    public function formInfo()
    {
        $value = ContactPage::find(1);

        return view('form-contact',
            [
                'value' => $value
            ]);
    }

    public function ContactInfo()
    {
        $values = ContactPage::find(1);

        return view('contact',
            [
                'values' => $values
            ]);
    }
}
