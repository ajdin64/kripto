<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Balance extends Controller
{
    public function dodajBalance()
    {
        $korisnik = Auth::user();

        if (!$korisnik) {
            return response()->json([
                'status' => 'greška',
                'poruka' => 'Korisnik nije autentifikovan.'
            ], 401);
        }

        $iznosZaDodavanje = 100;
        $korisnik->balance += $iznosZaDodavanje;
        $korisnik->save();

        return redirect('buydeposit');

    }
}
