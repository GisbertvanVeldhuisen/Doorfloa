<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function updateOrCreatePost(Request $request)
    {
        Post::updateOrCreate([
            'post_title' => $request->post('post_title'),
            'post_ingredients' => $request->post('post_ingredients'),
            'post_preparation_title' => $request->post('post_preparation_title'),
            'post_preparation' => $request->post('post_preparation'),
            'page_color' => $request->post('color'),
            'accent_color' => $request->post('accent_color')
        ]);


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

        $posts = Post::findOrFail($post_id);

        return view('singlepage', [

            'posts' => $posts,

        ]);
    }

    public function deletePost($post_id)
    {
        Post::destroy($post_id);

        return redirect()->back()->with('success', 'De post is verwijderd!');
    }
}
