<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        return View('admin.dashboard', [
            'category' => DB::table('categories')->count(),
            'post'     => DB::table('posts')->count(),
            'user'     => DB::table('users')->count(),
        ]);
    }
}
