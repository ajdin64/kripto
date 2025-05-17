<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vijesti;

class VijestiController extends Controller
{
    public function store(Request $request)
    {
        // Validacija podataka
        $validated = $request->validate([
            'naslov' => 'required|string|max:255',
            'kontent' => 'required|string',
            'slika' => 'nullable|image|max:2048', // opcionalna slika, max 2MB
        ]);

        $vijest = new Vijesti();
        $vijest->naslov = $validated['naslov'];
        $vijest->kontent = $validated['kontent'];

        // Ako postoji slika, snimi je i u bazu stavi putanju
        if ($request->hasFile('slika')) {
            $putanja = $request->file('slika')->store('images', 'public');
            $vijest->slika = $putanja;
        }

        $vijest->save();

        return redirect()->back()->with('success', 'Vijest je uspješno dodana!');
    }

    public function prikazi(){
        $vijesti = Vijesti::all();

        return view('news',compact('vijesti'));
    }

}
