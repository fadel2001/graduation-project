<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function destinations()
    {
        return view('theme.destinations');
    }

    public function packages()
    {
        return view('theme.packages');
    }

    public function booking()
    {
        return view('theme.booking');
    }

    public function about()
    {
        return view('theme.about');
    }

    public function contact()
    {
        return view('theme.contact');
    }
    public function singleBlog()
    {
        return view('theme.Single-blog');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
