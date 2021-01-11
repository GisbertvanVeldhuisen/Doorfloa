<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipePageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        Recipe::updateOrCreate(
            [
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
                'title' => $request->get('title'),
                'intro' => $request->get('intro'),
                'quote' => $request->get('quote'),
                'title_text' => $request->get('titel_text'),
                'text' => $request->get('text'),
                'title_text_1' => $request->get('titel_text_1'),
                'text_1' => $request->get('text_1'),
                'page_color' => $request->get('color'),
                'accent_color' => $request->get('accent_color')
            ]
        );
        /*controleert of image png is*/
        $request->validate([
            'image_zoet' => ['mimes:png'],
            'image_hartig' => ['mimes:png'],
            'image_right' => ['mimes:png'],
            'image_left' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_zoet'))
            $request->file('image_zoet')->storeAs('public', 'image_zoet.' . $request->file('image_zoet')->getClientOriginalExtension());

        if ($request->file('image_hartig'))
            $request->file('image_hartig')->storeAs('public', 'image_hartig.' . $request->file('image_hartig')->getClientOriginalExtension());

        if ($request->file('image_right'))
            $request->file('image_right')->storeAs('public', 'image_recipe_right.' . $request->file('image_right')->getClientOriginalExtension());

        if ($request->file('image_left'))
            $request->file('image_left')->storeAs('public', 'image_recipe_left.' . $request->file('image_left')->getClientOriginalExtension());

        return back()->with('success', 'De recepten pagina is aangepast!');
    }

    public function formInfo()
    {
        $value = Recipe::find(1);

        return view('form-recipe_page',
            [
                'value' => $value
            ]);
    }

    public function RecipeInfo()
    {
        $values = Recipe::find(1);

        return view('recipe',
            [
                'values' => $values
            ]);
    }
}
