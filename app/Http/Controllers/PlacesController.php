<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacesController extends Controller
{

    // adventure places
    public function wadimujib()
    {
        return view('places.adventure.wadimujib');
    }
    public function ajlonforest()
    {
        return view('places.adventure.ajlonforest');
    }

    public function danareserve()
    {
        return view('places.adventure.danareserve');
    }
    public function dibeenforest()
    {
        return view('places.adventure.dibeenforest');
    }

    // Beach places
    public function aqaba()
    {
        return view('places.beach.aqaba');
    }
    public function deadsea()
    {
        return view('places.beach.deadsea');
    }

    //cultural places
    public function ovalplaza()
    {
        return view('places.cultural.ovalplaza');
    }
    public function ammancitadel()
    {
        return view('places.cultural.ammancitadel');
    }

    public function ajloncastle()
    {
        return view('places.cultural.ajloncastle');
    }
    public function shobakcastle()
    {
        return view('places.cultural.shobakcastle');
    }

    //historical places
    public function petra()
    {
        return view('places.historical.petra');
    }
    public function ummqais()
    {
        return view('places.historical.ummqais');
    }

    public function karakcastle()
    {
        return view('places.historical.karakcastle');
    }
    public function qasramra()
    {
        return view('places.historical.qasramra');
    }

    //religious places
    public function baptismsite()
    {
        return view('places.religious.baptismsite');
    }
    public function mountnebo()
    {
        return view('places.religious.mountnebo');
    }

    public function almaghtas()
    {
        return view('places.religious.almaghtas');
    }
    public function nabimusasite()
    {
        return view('places.religious.nabimusasite');
    }
}
