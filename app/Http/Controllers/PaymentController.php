<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // This method handles the display of the payment page
        return view('theme.partials.payment');
    }
}
