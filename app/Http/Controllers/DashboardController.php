<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if (\Gate::allows('isSuperAdmin')) {
            return view('ptc-admin.adminDashboard.dashboard');
        } elseif (\Gate::allows('isStudent')){
            return view('student.dashboard');

        }

    }

    public function studentprofile()
    {
        return view('student.profile');
    }

    public function addStudent()
    {
        return view('ptc-admin.adminDashboard.addStudent');
    }

    public function managePosts()
    {
        $posts = Post::all();
        return view('ptc-admin.adminDashboard.managePosts')->with('posts',$posts);
       
    }

    public function createNews()
    {
        return view('ptc-admin.adminDashboard.createNews');
    }

    public function CreateAnnouncement()
    {
        return view('ptc-admin.adminDashboard.createAnnouncement');
    }
}
