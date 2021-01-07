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
