<?php

namespace App\Http\Controllers;

use App\Category;
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
                    'categories' => Category::all(),
                    'posts' => Post::simplepaginate(3),

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

    public function post()
    {
        return view('post');
    }

    public function project()
    {
        return view('project');
    }

    public function chat(Request $request)
    {
        event(new Message($request->input('message')));
    }
}
