<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function adventure()
    {
        return view('categories.adventure');
    }

    public function beach()
    {
        return view('categories.beach');
    }

    public function cultural()
    {
        return view('categories.cultural');
    }

    public function historical()
    {
        return view('categories.historical');
    }

    public function religious()
    {
        return view('categories.religious');
    }
}
