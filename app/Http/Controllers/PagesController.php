<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home')->with('posts', Post::orderBy('created_at','desc')->paginate(5));
    }

    public function dashboard()
    {
        return view('ptc-admin.adminDashboard.dashboard');
    }
}
