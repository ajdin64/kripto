<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proizvodi;

class Objavljivanje extends Controller
{
    public function objavljivanje(Request $request)
    {
        // Validacija unosa
        $request->validate([
            'ime' => 'required|in:Coal,Iron,Uranium,Platinum,Gold,Iridium,Rhodium,Osmium,Plutonium,Radium,Diamond,Blue Garnet,Black Opal,Ruby,Painite',
            'opis' => 'required',
            'kolicina' => 'required|numeric|min:0.0001',
            'cijena' => 'required|numeric|min:0.0001',
        ]);

        $user = auth()->user();

        $ruda = \App\Models\Rude::where('ime', $request->ime)->first();

        if (!$ruda) {
            return back()->withErrors(['error' => 'Ruda nije pronađena.']);
        }

        $korisnikRuda = $user->rude()->where('rude_id', $ruda->id)->first();

        if (!$korisnikRuda || $korisnikRuda->pivot->kolicina < $request->kolicina) {
            return back()->withErrors(['error' => 'Nemate dovoljno rude za ovaj oglas.']);
        }

        $novaKolicina = $korisnikRuda->pivot->kolicina - $request->kolicina;
        $user->rude()->updateExistingPivot($ruda->id, ['kolicina' => $novaKolicina]);

        if ($user->balance < 20) {
            return back()->withErrors(['error' => 'Nemate dovoljno novca za objavu oglasa (potrebno: 20 CP).']);
        }


        $novaKolicina = $korisnikRuda->pivot->kolicina - $request->kolicina;
        $user->rude()->updateExistingPivot($ruda->id, ['kolicina' => $novaKolicina]);



        Proizvodi::create([
           'user_id' => auth()->id(),
            'ime'=>$request->ime,
            'opis' => $request->opis,
            'cijena' => $request->cijena,
            'kolicina' => $request->kolicina,
            'status' => true,

        ]);

        $user->balance -= 20;
        $user->save();

        return redirect()->route('home');





    }
}
