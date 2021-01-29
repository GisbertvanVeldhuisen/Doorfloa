<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralFormController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        $request->validate([
            'header_img' => ['mimes:png', 'max:2048'],
            'contact_img' => ['mimes:png', 'max:2048'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('header_img'))
            $request->file('header_img')->storeAs('public/general', 'header_img.' . $request->file('header_img')->getClientOriginalExtension());

        if ($request->file('contact_img'))
            $request->file('contact_img')->storeAs('public/general', 'contact_img.' . $request->file('contact_img')->getClientOriginalExtension());

        return back()->with('success', 'De standaard informatie is aangepast!');
    }



}
