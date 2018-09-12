<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Image;


class PostController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->reset){
           $request->search = null;
           session()->forget('search');
       }

        if ($request->search || session()->has('search'))
        {
            if ($request->search){
                $request->session()->put('search', $request->search);
            }
            $search = $request->search ?? session()->get('search');

            $posts = Post::search($search)->orderBy('created_at', 'desc')->paginate(10);
        }else
            {
                $posts = Post::with('categories')->orderBy('created_at', 'desc')->paginate(10);
            }

        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'post'    => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'tags' => Tag::all(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        // Categories
        if($request->input('categories')) :
            $post->categories()->attach($request->input('categories'));
        endif;
        // Tags
        if($request->input('tags')) :
            $post->tags()->attach($request->input('tags'));
        endif;

        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post'    => $post,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'tags' => Tag::all(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        // Categories
        $post->categories()->detach();
        if($request->input('categories')) :
            $post->categories()->attach($request->input('categories'));
        endif;

        // tags
        $post->tags()->detach();
        if($request->input('tags')) :
            $post->tags()->attach($request->input('tags'));
        endif;

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();

        return redirect()->route('admin.post.index');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function change($id)
    {
        $post = Post::findOrFail($id);
        $post->published = !$post->published;
        $post->save();
        return $post;
    }

}
