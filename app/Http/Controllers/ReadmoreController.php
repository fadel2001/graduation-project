<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadmoreController extends Controller
{
    public function package1() {
        return view ('packages.package1');
    }

    public function package2() {
        return view ('packages.package2');
    }

    public function package3() {
        return view ('packages.package3');
    }
}
