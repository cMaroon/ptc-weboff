<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function dashboard()
    {
        return view('ptc-admin.adminDashboard.dashboard');
    }
}
