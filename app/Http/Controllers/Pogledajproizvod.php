<?php

namespace App\Http\Controllers;

use App\Models\Proizvodi; // Uvezi model Proizvodi
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rude;

class Pogledajproizvod extends Controller
{
    public function show($id) // Promeni naziv funkcije u 'show'
    {
        $proizvod = Proizvodi::find($id); // Pronađi proizvod pomoću ID-a
        if (!$proizvod) {
            abort(404); // Ako proizvod ne postoji, vrati 404 grešku
        }

        return view('pogledajproizvod', compact('proizvod')); // Prosledi proizvod u view
    }

    public function kupi($id)
    {
        // Dohvati trenutno prijavljenog korisnika
        $kupac = Auth::user();

        // Pronađi proizvod pomoću ID-a
        $proizvod = Proizvodi::findOrFail($id);

        // Provjera da li kupac ima dovoljno novca
        if ($kupac->balance < $proizvod->cijena) {
            return back()->with('error', 'Nemate dovoljno novca na računu.');
        }

        // Pronađi odgovarajuću rudu u tabeli Rude prema imenu proizvoda
        $ruda = Rude::where('ime', $proizvod->ime)->first();

        if (!$ruda) {
            return back()->with('error', 'Ruda nije pronađena.');
        }

        // Provjerite da li korisnik već ima ovu rudu u svom računu
        $postojecaRuda = $kupac->rude()->where('rude_id', $ruda->id)->first();

        if ($postojecaRuda) {
            // Ako korisnik već ima rudu, povećaj količinu u pivot tabeli
            $novaKolicina = $postojecaRuda->pivot->kolicina + $proizvod->kolicina;
            $kupac->rude()->updateExistingPivot($ruda->id, ['kolicina' => $novaKolicina]);
        } else {
            // Ako korisnik nema ovu rudu, dodaj novu u pivot tabelu
            $kupac->rude()->attach($ruda->id, ['kolicina' => $proizvod->kolicina]);
        }

        // Umanji balans kupcu za cijenu proizvoda
        $kupac->balance -= $proizvod->cijena;
        $kupac->save();

        // Dodaj balans prodavcu (ako prodavac postoji)
        $prodavac = User::find($proizvod->user_id);
        if ($prodavac) {
            $prodavac->balance += $proizvod->cijena;
            $prodavac->save();
        }

        // Obriši proizvod iz baze (kada je uspešno kupljen)
        $proizvod->delete();

        // Vraćanje korisniku sa uspešnim porukama
        return redirect('/')->with('success', 'Uspješno ste kupili proizvod.');
    }

}
