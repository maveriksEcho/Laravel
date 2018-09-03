<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Events\Message;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog',[
                    'categories' => Category::with('children')->where('parent_id', '0')->get(),
                    'posts' => Post::with(['categories', 'users', 'comments', 'tags'])->simplepaginate(3),
                    'delimiter'  => ' '
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function work()
    {
        return view('work');
    }

    public function post($slug)
    {
        return view('post', [
            'categories' => Category::with('children')->where('parent_id', '0')->get(),
            'post' => Post::with(['categories', 'users', 'comments', 'tags'])->where('slug', $slug)->get(),
            'delimiter'  => ' '
        ]);
    }

    public function project()
    {
        return view('project');
    }

    public function chat(Request $request)
    {
        event(new Message($request->input('message')));
    }

    public function comment(Request $request)
    {
        $comment = Comment::create($request->except('submit'));
        return redirect()->back();
    }
}
