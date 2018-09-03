<?php

namespace App\Http\Controllers\admin;

use App\Comment;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        return View('admin.dashboard', [
            'category' => Category::count(),
            'post'     => Post::count(),
            'comment'     => Comment::count(),
            'user'     => User::count(),
        ]);
    }

    public function categories()
    {
       return view('admin.categories.index');
    }
}
