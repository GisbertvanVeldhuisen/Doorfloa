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
        ]);


        return back()->with('success', 'De post is aangemaakt!');
    }

    public function postInfo()
    {
        $posts = Post::find(1);

        return view('post',
            [
                'posts' => $posts
            ]);
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

    public function singlePageContent($post_title)
    {
        $posts = Post::select('id')->where('post_title', $post_title)->first();

        return view('singlepage', [

            'posts' => $posts,

        ]);
    }

    public function deletePost(Request $request)
    {
        Post::destroy($request->get('post_id'));

        return redirect()->back();
    }

}
