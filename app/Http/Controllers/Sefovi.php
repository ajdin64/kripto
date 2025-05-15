<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Vault;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Sefovi extends Controller
{
    function index(){
        $sefovi = Vault::Where('ime', 'Coal Mine')->get();
        return view('shop', compact('sefovi'));
    }

    public function procesutoku()
    {
        $vault = Vault::where('ime', 'Coal Mine')->first();
        $korisnik = Auth::user();

        if (!$vault) {
            return redirect('shop')->withErrors('Vault nije pronađen.');
        }

        if ($vault->kolicina < 2) {
            return redirect('shop')->withErrors('Nema dovoljno resursa u vaultu.');
        }

        if ($korisnik->balance < $vault->cijena) {
            return redirect('shop')->withErrors('Nemate dovoljno CP.');
        }

        DB::transaction(function () use ($vault, $korisnik) {
            $korisnik->balance -= $vault->cijena;
            $korisnik->save();

            $vault->kolicina -= 2;

            if ($vault->kolicina <= 900 && $vault->cijena != 150) {
                $vault->cijena = 150;
            }

            $vault->save();


            $rudaId = 38;

            if ($korisnik->rude()->where('rude_id', $rudaId)->exists()) {
                $trenutna = $korisnik->rude()->where('rude_id', $rudaId)->first()->pivot->kolicina;
                $korisnik->rude()->updateExistingPivot($rudaId, ['kolicina' => $trenutna + 2]);
            } else {
                $korisnik->rude()->attach($rudaId, ['kolicina' => 2]);
            }
        });

        return redirect('shop')->with('success', 'Uspješno ste kupili rudu.');
    }
}
