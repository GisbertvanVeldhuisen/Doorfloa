<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function updateOrCreatePost(Request $request)
    {
        $post = Post::updateOrCreate([
            'title_intro' => $request->post('title_intro'),
            'intro' => $request->post('intro'),
            'title' => $request->post('title'),
            'ingredients' => $request->post('ingredients'),
            'preparation_title' => $request->post('preparation_title'),
            'preparation' => $request->post('preparation'),
            'page_color' => $request->post('color'),
            'accent_color' => $request->post('accent_color')
        ]);

        $request->validate([
            'image_dish' => ['mimes:png'],
            'image_dish1' => ['mimes:png'],
            'image_dish2' => ['mimes:png'],
            'image_dish3' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image_dish'))
            $request->file('image_dish')->storeAs('public/post', $post->id . 'image_dish.' . $request->file('image_dish')->getClientOriginalExtension());

        if ($request->file('image_dish1'))
            $request->file('image_dish1')->storeAs('public/post', $post->id . 'image_dish1.' . $request->file('image_dish1')->getClientOriginalExtension());

        if ($request->file('image_dish2'))
            $request->file('image_dish2')->storeAs('public/post', $post->id . 'image_dish2.' . $request->file('image_dish2')->getClientOriginalExtension());

        if ($request->file('image_dish3'))
            $request->file('image_dish3')->storeAs('public/post', $post->id . 'image_dish3.' . $request->file('image_dish3')->getClientOriginalExtension());

        return back()->with('success', 'De post is aangemaakt!');
    }

    public function postInfo()
    {
        return view('post');
    }

    public function getPost()
    {
        $posts = Post::all();

        return view('editpost', [

            'posts' => $posts,

        ]);
    }

    public function postEdit(Request $request){
        Post::updateOrCreate([
            'post_title' => $request->get('post_title'),
            'post_ingredients' => $request->get('post_ingredients'),
            'post_preparation_title' => $request->get('post_preparation_title'),
            'post_preparation' => $request->get('post_preparation'),
        ]);

        return back()->with('success', 'De post is geupdated!');
    }

    public function singlePageContent($post_id)
    {

        $values = Post::findOrFail($post_id);

        return view('singlepage', [

            'values' => $values,

        ]);
    }

    public function deletePost($post_id)
    {
        Post::destroy($post_id);

        return redirect()->back()->with('success', 'De post is verwijderd!');
    }
}
