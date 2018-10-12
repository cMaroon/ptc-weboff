<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Admission;

class PagesController extends Controller
{
    public function home()
    {   
        return view('pages.home')->with('posts' , Post::orderBy('created_at','desc')->paginate(5));
    }

    public function collegeapplication()
    {
        return view('pages.collegeapplication');
    }

 
    // public function dashboard()
    // {
    //     return view('ptc-admin.adminDashboard.dashboard');
    // }
}
