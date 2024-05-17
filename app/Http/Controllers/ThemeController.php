<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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


   $validatedData= $request->validate([

        'subject'=>"min:6",
        'name' => 'required|string|min:4|max:10',
        'email' => 'required|string|email|max:255',
        //'password' => 'string|min:8|confirmed',
        'message' => 'string|min:15',
    ]);
   // dd($validatedData);
Contact::create($validatedData);
return redirect('contact')->with('status','your message has been sent successfully!');
}

public function R(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|min:4|max:10',
        'email' => 'required|string|email|max:255|unique:registers,email',
        'password' => 'required|string|min:8|confirmed',

    ]);


    $validatedData['password'] = bcrypt($validatedData['password']);

    Register::create($validatedData);




    return redirect()->intended('/')->with('status');
}
public function L(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/')->with('status', 'You are logged in successfully!');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

}
