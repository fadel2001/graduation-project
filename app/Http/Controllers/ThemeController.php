<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Login;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



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
            'subject' => 'string|max:20',
            'name' => 'required|string|min:4',
            'email' => 'required|email|max:255',
            'message' => 'string|max:60',
        ]);

        Contact::create($validatedData);
        return redirect('contact')->with('status', 'your message has been sent successfully!');
    }


    public function registerStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:4|max:10',
            'email' => 'required|string|email|max:255|unique:registers,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        Register::create($validatedData); // add the data to the Register table on database
        User::create($validatedData);   // add the data to the User table on database
        return redirect('/login')->with('status', 'Registration successful! Please login.');
    }
    public function loginStore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            // Authentication was successful
            Login::create($validatedData);  // add the data to the login table on database
            return redirect()->intended('/')->with('status', 'Login successful!');
        } else {
            // Authentication failed, redirect back with an error message
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
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
