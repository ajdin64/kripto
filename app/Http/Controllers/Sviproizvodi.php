<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proizvodi;

class Sviproizvodi extends Controller
{
    public function index()
    {
        // Pronaći sve proizvode sa imenom 'Coal'
        $coalruda = Proizvodi::where('ime', 'Coal')->get();
        $ironruda = Proizvodi::where('ime', 'Iron')->get();
        $uraniumruda = Proizvodi::where('ime', 'Uranium')->get();
        $platinumruda = Proizvodi::where('ime', 'Platinum')->get();
        $goldruda = Proizvodi::where('ime', 'Gold')->get();
        $iridiumruda = Proizvodi::where('ime', 'Iridium')->get();
        $rhodiumruda = Proizvodi::where('ime', 'Rhodium')->get();
        $osmiumruda = Proizvodi::where('ime', 'Osmium')->get();
        $plutoniumruda = Proizvodi::where('ime', 'Plutonium')->get();
        $radiumruda = Proizvodi::where('ime', 'Radium')->get();
        $diamondruda = Proizvodi::where('ime', 'Diamond')->get();
        $bluegarnetruda = Proizvodi::where('ime', 'Blue Garnet')->get();
        $blackopalruda = Proizvodi::where('ime', 'Black Opal')->get();
        $rubyruda = Proizvodi::where('ime', 'Ruby')->get();
        $painiteruda = Proizvodi::where('ime', 'Painite')->get();




        return view('pocetna', compact('coalruda', 'ironruda', 'uraniumruda', 'platinumruda', 'goldruda',
            'iridiumruda', 'rhodiumruda', 'osmiumruda', 'plutoniumruda', 'radiumruda',
            'diamondruda', 'bluegarnetruda', 'blackopalruda', 'rubyruda', 'painiteruda'));
    }
}
