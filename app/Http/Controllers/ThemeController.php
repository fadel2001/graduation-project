<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Login;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;


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


    public function store(Request $request)
    {


        $validatedData = $request->validate([

            'subject' => "string|max:20",
            'name' => 'required|string|min:4|max:10',
            'email' => 'required|email|max:255',
            'message' => 'string|max:60',
        ]);
        // dd($validatedData);
        Contact::create($validatedData);
        return redirect('contact')->with('status', 'your message has been sent successfully!');
    }

    public function R(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:4|max:10',
            'email' => 'required|string|email|max:255|unique:registers,email',
            'password' => 'required|min:6|confirmed',

        ]);


        $validatedData['password'] = bcrypt($validatedData['password']);

        Register::create($validatedData);




        return redirect()->intended('/')->with('status');
    }
    public function L(Request $request)
    {


        $validatedData = $request->validate([

            'email' => 'required|string|email|max:255|unique:registers,email',
            'password' => 'required|min:6|confirmed',
        ]);

        Login::create($validatedData);
        return redirect()->intended('/')->with('status');
    }

    public function B(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'destination' => 'required|string|max:255',
            'numofpeople' => 'required|integer|min:1',
            'cost' => 'nullable|numeric|min:0',
            'request' => 'nullable|string|max:255',

        ]);

        Booking::create($validatedData);
        return redirect()->intended('/')->with('hi');
    }
}