<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function updateOrCreatePost(Request $request)
    {
        $post = Post::create([
            'title_intro' => $request->post('title_intro'),
            'intro' => $request->post('intro'),
            'title' => $request->post('title'),
            'ingredients' => $request->post('ingredients'),
            'preparation_title' => $request->post('preparation_title'),
            'preparation' => $request->post('preparation'),
            'page_color' => $request->post('color'),
            'accent_color' => $request->post('accent_color'),
            'category' => $request->post('category'),
        ]);

        $request->validate([
            'image_dish' =>['mimes:png', 'max:2048'],
            'image_dish1' => ['mimes:png', 'max:2048'],
            'image_dish2' => ['mimes:png', 'max:2048'],
            'image_dish3' => ['mimes:png', 'max:2048'],
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
        $subcategory = Subcategory::all();
        $posts = Post::all();
        $category = Category::all();

        return view('post', [
            'subcategory' => $subcategory,
            'posts' => $posts,
            'category' => $category
        ]);
    }

    public function getPost($post_id)
    {
        $post = Post::findorfail($post_id);
        $subcategory = Subcategory::all();


        return view('editpost', [

            'subcategory' => $subcategory,
            'post' => $post,

        ]);
    }

    public function postEdit(Request $request){
        $value = Post::find($request->get('id'));
        $value->title_intro = $request->get('title_intro');
        $value->intro = $request->get('intro');
        $value->title = $request->get('title');
        $value->ingredients = $request->get('ingredients');
        $value->preparation_title = $request->get('preparation_title');
        $value->preparation = $request->get('preparation');
        $value->page_color = $request->get('color');
        $value->accent_color = $request->get('accent_color');
        $value->category = $request->get('category');
        $value->save();

        return redirect('/post')->with('success', 'De post is bijgewerkt!');
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

        return redirect('/post')->with('success', 'De post is verwijderd!');
    }
}
